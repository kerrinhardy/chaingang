<?php

require_once('../../../private/initialise.php');

if (!isset($_GET['id'])) {
    redirect_to(url_for('/staff/bicycles/index.php'));
}
$id = $_GET['id'];

$bicycle = Bicycle::find_by_id($id);

if ($bicycle == false) {
    redirect_to(url_for('/staff/bicycles/index.php'));
}

if (is_post_request()) {

    // Delete bicycle
    $result = $bicycle->delete();
    $_SESSION['message'] = 'The bicycle was deleted successfully.';
    redirect_to(url_for('/staff/bicycles/index.php'));

} else {
    // Display form
}

?>

<?php $page_title = 'Delete Bicycle'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

    <div class="px-5 pt-6">
        <a class="text-xs text-gray-700" href="<?php echo url_for('/staff/bicycles/index.php'); ?>">&laquo; Back to
            List</a>
    </div>

    <div class="bg-white rounded px-8 pt-6 pb-6 mb-4 flex flex-col my-2">
        <h1 class="text-3xl pb-4 text-teal-700 font-semibold">Delete Bicycle</h1>
        <p>Are you sure you want to delete this bicycle?</p>

        <p class="p-3 text-2xl"><?php echo h($bicycle->name()); ?></p>

        <form action="<?php echo url_for('/staff/bicycles/delete.php?id=' . h(u($id))); ?>" method="post">
            <div class="flex items-center justify-between mt-3">
                <button class="bg-teal-700 text-white font-bold py-2 px-4 border-b-1 hover:border-b-2 hover:border-t-2 border-teal-dark hover:border-teal rounded"
                        type="submit">
                    Delete Bicycle
                </button>
            </div>
        </form>
    </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
