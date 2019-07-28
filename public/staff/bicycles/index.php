<?php require_once('../../../private/initialise.php'); ?>

<?php
setlocale(LC_MONETARY, 'en_AU.utf8');

// Find all bicycles;
$bicycles = Bicycle::find_all();

?>
<?php $page_title = 'Bicycles'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
    <div class="bicycles listing">
        <h1 class="text-3xl px-5 py-4 text-teal-700 font-semibold">Bicycles</h1>

        <div class="text-right pr-5 py-1">
            <a class="bg-teal-700 text-white font-bold py-2 px-4 border-b-1 hover:border-b-2 hover:border-t-2 border-teal-dark hover:border-teal rounded"
               href="<?php echo url_for('/staff/bicycles/new.php'); ?>">
                Add Bicycle
            </a>
        </div>

        <div class="px-5 py-4 flex justify-center">
            <table class="w-full text-md bg-white shadow-md rounded mb-4">
                <thead class="border-b bg-gray-200 text-sm">
                <tr>
                    <th class="text-left p-3 px-5">ID</th>
                    <th class="text-left p-3 px-5">Brand</th>
                    <th class="text-left p-3 px-5">Model</th>
                    <th class="text-left p-3 px-5">Year</th>
                    <th class="text-left p-3 px-5">Category</th>
                    <th class="text-left p-3 px-5">Gender</th>
                    <th class="text-left p-3 px-5">Color</th>
                    <th class="text-right p-3 px-5">Price</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($bicycles as $bicycle) { ?>
                    <tr class="border-b hover:bg-teal-100 bg-gray-100">
                        <td class="p-3 px-5"><?php echo h($bicycle->id); ?></td>
                        <td class="p-3 px-5"><?php echo h($bicycle->brand); ?></td>
                        <td class="p-3 px-5"><?php echo h($bicycle->model); ?></td>
                        <td class="p-3 px-5"><?php echo h($bicycle->year); ?></td>
                        <td class="p-3 px-5"><?php echo h($bicycle->category); ?></td>
                        <td class="p-3 px-5"><?php echo h($bicycle->gender); ?></td>
                        <td class="p-3 px-5"><?php echo h($bicycle->color); ?></td>
                        <td class="p-3 px-5 text-right">$<?php echo h(number_format($bicycle->price)); ?></td>
                        <td class="pl-3 text-right">
                            <a class="uppercase text-xs bg-teal-500 hover:bg-teal-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline"
                               href="<?php echo url_for('/staff/bicycles/show.php?id=' . h(u($bicycle->id))); ?>">View</a>
                        </td>
                        <td class="text-right">
                            <a class="uppercase text-xs border border-teal-500 text-teal-500  hover:bg-teal-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline"
                               href="<?php echo url_for('/staff/bicycles/edit.php?id=' . h(u($bicycle->id))); ?>">Edit</a>
                        </td>
                        <td class="pr-3 text-right">
                            <a class="uppercase text-xs" href="<?php echo url_for('/staff/bicycles/delete.php?id=' . h(u($bicycle->id))); ?>">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
