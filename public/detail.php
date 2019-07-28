<?php require_once('../private/initialise.php'); ?>

<?php
$id = $_GET['id'] ?? false;

if (!$id) {
    redirect_to('bicycles.php');
}

$bike = Bicycle::find_by_id($id);

?>

<?php $page_title = 'Detail: ' . $bike->name(); ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>

    <div id="main">
        <div class="px-5 pt-6">
            <a class="text-xs text-gray-700" href="<?php echo url_for('bicycles.php'); ?>">&laquo; Back to Inventory</a>
        </div>

        <div class="w-3/4 mx-auto">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2"><?php echo h($bike->name()); ?></div>
                <p class="text-gray-700 text-base">
                    <?php echo h($bike->description); ?>
                </p>
            </div>
            <div class="px-6 py-4 pb-8">
                <span class="inline-block bg-blue-600 rounded-full px-3 py-1 text-sm font-semibold text-white mr-2">#<?php echo h($bike->category); ?></span>
                <span class="inline-block bg-blue-600 rounded-full px-3 py-1 text-sm font-semibold text-white mr-2">#<?php echo h($bike->gender); ?></span>
                <span class="inline-block bg-blue-600 rounded-full px-3 py-1 text-sm font-semibold text-white">#<?php echo h($bike->condition()); ?></span>
            </div>


            <div class="mx-3 md:flex mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold" for="brand">
                        Brand
                    </label>
                    <div class="text-2xl pr-5 pb-2">
                        <?php echo h($bike->brand); ?>
                    </div>
                </div>
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold" for="model">
                        Model
                    </label>
                    <div class="text-2xl pr-5 pb-2">
                        <?php echo h($bike->model); ?>
                    </div>
                </div>
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold" for="year">
                        Year
                    </label>
                    <div class="text-2xl pr-5 pb-2">
                        <?php echo h($bike->year); ?>
                    </div>
                </div>
            </div>

            <div class="mx-3 md:flex mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold" for="brand">
                        Color
                    </label>
                    <div class="text-2xl pr-5 pb-2">
                        <?php echo h($bike->color); ?>
                    </div>
                </div>
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold" for="model">
                        Weight
                    </label>
                    <div class="text-2xl pr-5 pb-2">
                        <?php echo h($bike->weight_kg()) . ' / ' . h($bike->weight_lbs()); ?>
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
                        $<?php echo h(number_format($bike->price)); ?>
                    </div>
                </div>
            </div>

        </div>
    </div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>