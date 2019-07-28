<?php
// prevents this code from being loaded directly in the browser
// or without first setting the necessary object
if (!isset($bicycle)) {
    redirect_to(url_for('/staff/bicycles/index.php'));
}
?>
<div class="-mx-3 md:flex mb-6">
    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="brand">
            Brand
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-900 border border-gray-400 rounded py-3 px-4 mb-3"
               id="brand" name="bicycle[brand]" type="text" value="<?php echo h($bicycle->brand); ?>" placeholder="Apollo">
    </div>
    <div class="md:w-1/2 px-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="model">
            Model
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-900 border border-gray-400 rounded py-3 px-4 mb-3"
               id="model" name="bicycle[model]" type="text" value="<?php echo h($bicycle->model); ?>" placeholder="Jetstream">
    </div>
</div>

<div class="-mx-3 md:flex mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="year">
            Year
        </label>
        <div class="relative">
            <select class="block appearance-none w-full bg-gray-200 border border-gray-400 text-gray-900 py-3 px-4 pr-8 rounded focus:outline-none focus:bg-white focus:border-gray-500"
                    name="bicycle[year]">
                <option value=""></option>
                <?php $this_year = idate('Y') ?>
                <?php for ($year = $this_year - 20; $year <= $this_year; $year++) { ?>
                    <option value="<?php echo $year; ?>"<?php if($bicycle->year == $year) { echo 'selected'; } ?>><?php echo $year; ?></option>
                <?php } ?>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                </svg>
            </div>
        </div>
    </div>
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
            Category
        </label>
        <div class="relative">
            <select class="block appearance-none w-full bg-gray-200 border border-gray-400 text-gray-900 py-3 px-4 pr-8 rounded focus:outline-none focus:bg-white focus:border-gray-500"
                    name="bicycle[category]">
                <option value=""></option>
                <?php foreach (Bicycle::CATEGORIES as $category) { ?>
                    <option value="<?php echo $category; ?>" <?php if($bicycle->category == $category) { echo 'selected'; } ?>><?php echo $category; ?></option>
                <?php } ?>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                </svg>
            </div>
        </div>
    </div>
    <div class="md:w-1/2 px-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
            Gender
        </label>
        <div class="relative">
            <select class="block appearance-none w-full bg-gray-200 border border-gray-400 text-gray-900 py-3 px-4 pr-8 rounded focus:outline-none focus:bg-white focus:border-gray-500"
                    name="bicycle[gender]">
                <option value=""></option>
                <?php foreach (Bicycle::GENDERS as $gender) { ?>
                    <option value="<?php echo $gender; ?>" <?php if($bicycle->gender == $gender) { echo 'selected'; } ?>><?php echo $gender; ?></option>
                <?php } ?>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                </svg>
            </div>
        </div>
    </div>
</div>

<div class="-mx-3 md:flex mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="color">
            Color
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-900 border border-gray-400 rounded py-3 px-4 mb-3"
               id="color" name="bicycle[color]" type="text" value="<?php echo h($bicycle->color); ?>" placeholder="Red">
    </div>
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="condition">
            Condition
        </label>
        <div class="relative">
            <select class="block appearance-none w-full bg-gray-200 border border-gray-400 text-gray-900 py-3 px-4 pr-8 rounded focus:outline-none focus:bg-white focus:border-gray-500"
                    id="condition" name="bicycle[condition_id">
                <option value=""></option>
                <?php foreach (Bicycle::CONDITION_OPTIONS as $cond_id => $cond_name) { ?>
                    <option value="<?php echo $cond_id; ?>" <?php if($bicycle->condition_id == $cond_id) { echo 'selected'; } ?>><?php echo $cond_name; ?></option>
                <?php } ?>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                </svg>
            </div>
        </div>
    </div>
    <div class="md:w-1/2 px-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="weight_kg">
            Weight (kg)
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-900 border border-gray-400 rounded py-3 px-4 mb-3"
               name="bicycle[weight_kg]" type="text" value="<?php echo h($bicycle->weight_kg); ?>" placeholder="7.2">
    </div>
</div>

<div class="-mx-3 md:flex mb-6">
    <div class="w-full px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="description">
            Description
        </label>
        <textarea
                class="appearance-none block w-full bg-gray-200 text-gray-900 border border-gray-400 rounded py-3 px-4 mb-3"
                name="bicycle[description]" type="text" placeholder="Add detailed description"><?php echo h($bicycle->description); ?></textarea>
    </div>
</div>

<div class="-mx-3 md:flex mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="price">
            Price
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-900 border border-gray-400 rounded py-3 px-4 mb-3"
               name="bicycle[price]" type="text" value="<?php echo h($bicycle->price); ?>" placeholder="$43">
    </div>
</div>