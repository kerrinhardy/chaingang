<?php require_once('../../../private/initialise.php'); ?>

<?php

$id = $_GET['id'] ?? '1'; // PHP > 7.0

$bicycle = Bicycle::find_by_id($id);

?>

<?php $page_title = 'Show Bicycle: ' . h($bicycle->name()); ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

    <div class="px-5 pt-6">
        <a class="text-xs text-gray-700" href="<?php echo url_for('/staff/bicycles/index.php'); ?>">&laquo; Back to
            List</a>
    </div>

    <div class="w-3/4 mx-auto">
        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2"><?php echo h($bicycle->name()); ?></div>
            <p class="text-gray-700 text-base">
                <?php echo h($bicycle->description); ?>
            </p>
        </div>
        <div class="px-6 py-4 pb-8">
            <span class="inline-block bg-teal-600 rounded-full px-3 py-1 text-sm font-semibold text-white mr-2">#<?php echo h($bicycle->category); ?></span>
            <span class="inline-block bg-teal-600 rounded-full px-3 py-1 text-sm font-semibold text-white mr-2">#<?php echo h($bicycle->gender); ?></span>
            <span class="inline-block bg-teal-600 rounded-full px-3 py-1 text-sm font-semibold text-white">#<?php echo h($bicycle->condition()); ?></span>
        </div>


        <div class="mx-3 md:flex mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold" for="brand">
                    Brand
                </label>
                <div class="text-2xl pr-5 pb-2">
                    <?php echo h($bicycle->brand); ?>
                </div>
            </div>
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold" for="model">
                    Model
                </label>
                <div class="text-2xl pr-5 pb-2">
                    <?php echo h($bicycle->model); ?>
                </div>
            </div>
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold" for="year">
                    Year
                </label>
                <div class="text-2xl pr-5 pb-2">
                    <?php echo h($bicycle->year); ?>
                </div>
            </div>
        </div>
        <div class="mx-3 md:flex mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold" for="brand">
                    Color
                </label>
                <div class="text-2xl pr-5 pb-2">
                    <?php echo h($bicycle->color); ?>
                </div>
            </div>
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold" for="model">
                    Weight
                </label>
                <div class="text-2xl pr-5 pb-2">
                    <?php echo h($bicycle->weight_kg()) . ' / ' . h($bicycle->weight_lbs()); ?>
                </div>
            </div>
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold" for="year">

                </label>
                <div class="text-2xl pr-5 pb-2">

                </div>
            </div>
        </div>
        <div class="mx-3 md:flex mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold" for="brand">
                    Price
                </label>
                <div class="text-2xl pr-5 pb-2">
                    $<?php echo h(number_format($bicycle->price)); ?>
                </div>
            </div>
        </div>
    </div>
</div>
