<?php require_once('../private/initialise.php'); ?>

<?php $page_title = 'Inventory'; ?>
<?php $super_hero_image = 'AdobeStock_55807979_thumb.jpeg'; ?>

<?php include(SHARED_PATH . '/public_header.php'); ?>

    <div>
        <h2 class="mb-2 text-2xl font-semibold text-blue-700">Our Inventory of Used Bicycles</h2>
        <p class="mb-2">Choose the bike you love.</p>
        <p class="mb-2">We will deliver it to your door and let you try it before you buy it.</p>
    </div>

    <div class="px-5 py-4 flex justify-center">
        <table class="w-full text-md bg-white shadow-md rounded mb-4">
            <thead class="border-b bg-gray-200 text-sm">
            <tr>
                <th class="p-3 px-8">Brand</th>
                <th class="p-3 px-8">Model</th>
                <th class="p-3 px-8">Year</th>
                <th class="p-3 px-8">Category</th>
                <th class="p-3 px-8">Gender</th>
                <th class="p-3 px-8">Color</th>
                <th class="p-3 px-8 text-right">Price</th>
                <th class="p-3 px-8 text-right">&nbsp;</th>
            </tr>
            </thead>

            <?php

            $bikes = Bicycle::find_all();

            ?>
            <?php foreach ($bikes as $bike) { ?>
                <tr class="border-b hover:bg-blue-100 bg-gray-100">
                    <td class="p-2 px-4"><?php echo h($bike->brand); ?></td>
                    <td class="p-2 px-4"><?php echo h($bike->model); ?></td>
                    <td class="p-2 px-4"><?php echo h($bike->year); ?></td>
                    <td class="p-2 px-4"><?php echo h($bike->category); ?></td>
                    <td class="p-2 px-4"><?php echo h($bike->gender); ?></td>
                    <td class="p-2 px-4"><?php echo h($bike->color); ?></td>
                    <td class="p-2 px-4 text-right"><?php echo h(money_format('$%i', $bike->price)); ?></td>
                    <td class="p-2 px-4 text-right"><a href="detail.php?id=<?php echo $bike->id ?>">View Details</td>
                </tr>
            <?php } ?>

        </table>
    </div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>