<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['value', 'disabled' => false, 'defaultValue' => null]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['value', 'disabled' => false, 'defaultValue' => null]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<option
    value="<?php echo e($value); ?>"
    <?php echo e($disabled ? 'disabled' : ''); ?>


    <?php echo e($attributes); ?>

    <?php if($value == $defaultValue): echo 'selected'; endif; ?>
>
    <?php echo e($slot); ?>

</option>
<?php /**PATH /Users/achmadrifqi/Documents/Development/Laravel/RSUMM/inventory-RS/resources/views/components/option.blade.php ENDPATH**/ ?>