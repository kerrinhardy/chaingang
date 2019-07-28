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

    // Save record using post parameters
    $args = $_POST['bicycle'];

    $bicycle->merge_attributes($args);
    $result = $bicycle->save();

    if ($result === true) {
        $_SESSION['message'] = 'The bicycle was updated successfully.';
        redirect_to(url_for('/staff/bicycles/show.php?id=' . $id));
    } else {
        // show errors
    }

} else {

    // display the form

}

?>

<?php $page_title = 'Edit Bicycle'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

    <div class="px-5 pt-6">
        <a class="text-xs text-gray-700" href="<?php echo url_for('/staff/bicycles/index.php'); ?>">&laquo; Back to
            List</a>
    </div>

    <div class="bg-white rounded px-8 pt-6 pb-6 mb-4 flex flex-col my-2">
        <h1 class="text-3xl pb-4 text-teal-700 font-semibold">Edit Bicycle</h1>

        <?php echo display_errors($bicycle->errors); ?></p>

        <form action="<?php echo url_for('/staff/bicycles/edit.php?id=' . h(u($id))); ?>" method="post">

            <?php include('form_fields.php'); ?>

            <div class="flex items-center justify-between mt-3">
                <button class="bg-teal-700 text-white font-bold py-2 px-4 border-b-1 hover:border-b-2 hover:border-t-2 border-teal-dark hover:border-teal rounded"
                        type="submit">
                    Edit Bicycle
                </button>
            </div>
        </form>

    </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
