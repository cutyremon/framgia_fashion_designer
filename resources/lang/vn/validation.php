<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'Thuộc tính: phải được chấp nhận.',
    'active_url'           => 'Thuộc tính: không phải là một URL hợp lệ.',
    'after'                => 'Thuộc tính: phải là một ngày sau: date.',
    'after_or_equal'       => 'Thuộc tính: phải là ngày sau hoặc bằng: date.',
    'alpha'                => 'Thuộc tính: chỉ có thể chứa chữ cái.',
    'alpha_dash'           => 'Thuộc tính: chỉ có thể chứa chữ cái, số và dấu gạch ngang.',
    'alpha_num'            => 'Thuộc tính: chỉ có thể chứa chữ cái và số.',
    'array'                => 'Thuộc tính: phải là một mảng.',
    'before'               => 'Thuộc tính: phải là ngày trước: ngày.',
    'before_or_equal'      => 'Thuộc tính: phải là ngày trước hoặc bằng: date',
    'between'              => [
        'numeric' => 'Thuộc tính: phải nằm trong khoảng: min và: max.',
        'file'    => 'Thuộc tính: phải nằm trong khoảng: min và: kilobyt tối đa.',
        'string'  => 'Thuộc tính: phải nằm trong khoảng: min và: max characters.',
        'array'   => 'Thuộc tính: phải có từ: min đến: max items.',
    ],

    'boolean'              => 'Trường thuộc tính: phải là đúng hoặc sai.',
    'confirmed'            => 'xác nhận thuộc tính không khớp.',
    'date'                 => 'Thuộc tính: không phải là ngày hợp lệ.',
    'date_format'          => 'Thuộc tính: không khớp với định dạng: định dạng.',
    'different'            => 'Thuộc tính: và: khác phải khác.',
    'digits'               => 'Thuộc tính: phải là: các chữ số chữ số.',
    'digits_between'       => 'Thuộc tính: phải nằm giữa: min và: max digits.',
    'dimensions'           => 'The :attribute has invalid image dimensions.',
    'distinct'             => 'The :attribute field has a duplicate value.',
    'email'                => 'The :attribute must be a valid email address.',
    'exists'               => 'The selected :attribute is invalid.',
    'file'                 => 'The :attribute must be a file.',
    'filled'               => 'The :attribute field must have a value.',
    'image'                => 'The :attribute must be an image.',
    'in'                   => 'The selected :attribute is invalid.',
    'in_array'             => 'The :attribute field does not exist in :other.',
    'integer'              => 'The :attribute must be an integer.',
    'ip'                   => 'The :attribute must be a valid IP address.',
    'json'                 => 'The :attribute must be a valid JSON string.',
    'max'                  => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file'    => 'The :attribute may not be greater than :max kilobytes.',
        'string'  => 'The :attribute may not be greater than :max characters.',
        'array'   => 'The :attribute may not have more than :max items.',
    ],
    'mimes'                => 'The :attribute must be a file of type: :values.',
    'mimetypes'            => 'The :attribute must be a file of type: :values.',
    'min'                  => [
        'numeric' => 'The :attribute must be at least :min.',
        'file'    => 'The :attribute must be at least :min kilobytes.',
        'string'  => 'The :attribute must be at least :min characters.',
        'array'   => 'The :attribute must have at least :min items.',
    ],
    'not_in'               => 'The selected :attribute is invalid.',
    'numeric'              => 'The :attribute must be a number.',
    'present'              => 'The :attribute field must be present.',
    'regex'                => 'The :attribute format is invalid.',
    'required'             => 'The :attribute field is required.',
    'required_if'          => 'The :attribute field is required when :other is :value.',
    'required_unless'      => 'The :attribute field is required unless :other is in :values.',
    'required_with'        => 'The :attribute field is required when :values is present.',
    'required_with_all'    => 'The :attribute field is required when :values is present.',
    'required_without'     => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same'                 => 'The :attribute and :other must match.',
    'size'                 => [
        'numeric' => 'The :attribute must be :size.',
        'file'    => 'The :attribute must be :size kilobytes.',
        'string'  => 'The :attribute must be :size characters.',
        'array'   => 'The :attribute must contain :size items.',
    ],
    'string'               => 'The :attribute must be a string.',
    'timezone'             => 'The :attribute must be a valid zone.',
    'unique'               => 'The :attribute has already been taken.',
    'uploaded'             => 'The :attribute failed to upload.',
    'url'                  => 'The :attribute format is invalid.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
