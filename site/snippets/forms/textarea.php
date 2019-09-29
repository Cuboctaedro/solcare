<?php
/*
 * Required variables:
 *
 * $form_name (the form as defined in the controller)
 * $field_name (field name)
 * $field_label (the field label)
 *
 * Optiona variables
 *
 * $field_options (extra attributes like 'required' or 'disabled')
 *
 */
 $field_options = isset($field_options) ? $field_options : ' ';

?>
<div class="flex flex-col md:flex-row ">
    <label class="w-full md:w-24 md:text-right text-sm flex-none pr-2 label pt-2" for="<?= $field_name ?>"><?= $field_label ?></label>
    <textarea
    class="flex-auto py-1 px-2 border border-solid <?php e($form_name->error($field_name), ' border-red-400 ', 'border-solblue-300'); ?> bg-white focus:border-solblue-600"
        id="<?= $field_name ?>"
        name="<?= $field_name ?>"
        <?= $field_options ?>
    >
    <?= $form_name->old($field_name) ?>
    </textarea>
</div>
<?php if ($form_name->error($field_name)): ?>
    <p class="text-red-700 text-sm text-right w-full"><?= implode('<br>', $form_name->error($field_name)) ?></p>
<?php endif; ?>
