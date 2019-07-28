<?php require_once('../../private/initialise.php'); ?>

<?php $page_title = 'Staff Menu'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
    <div id="main-menu">
        <h1 class="text-xl px-2 py-4 text-teal-700 font-semibold">Main Menu</h1>
        <div class="bg-white ml-2">
            <nav class="flex flex-col sm:flex-row">
                <button class="text-gray-600 py-4 px-6 block hover:text-teal-500 focus:outline-none text-teal-500 border-b-2 font-medium border-teal-500">
                    <a href="<?php echo url_for('/staff/bicycles/index.php'); ?>">Bicycles</a>
                </button>
                <button class="text-gray-600 py-4 px-6 block hover:text-teal-500 focus:outline-none">
                    Tab 2
                </button>
                <button class="text-gray-600 py-4 px-6 block hover:text-teal-500 focus:outline-none">
                    Tab 3
                </button>
                <button class="text-gray-600 py-4 px-6 block hover:text-teal-500 focus:outline-none">
                    Tab 4
                </button>
            </nav>
        </div>
    </div>
</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
