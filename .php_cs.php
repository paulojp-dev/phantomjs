<?php

return PhpCsFixer\Config::create()
    ->setRules([
        '@PSR2' => true,
        'blank_line_before_statement' => [
            'statements' => [
                'die',
                'do',
                'exit',
                'for',
                'foreach',
                'goto',
                'if',
                'switch',
                'try',
                'while',
                //                'return',
            ]
        ],
        'cast_spaces' => [
            'space' => 'none'
        ],
        'class_attributes_separation' => [
            'elements' => [
                'method',
            ]
        ],
        'combine_consecutive_issets' => true,
        'combine_consecutive_unsets' => true,
        'compact_nullable_typehint' => true,
        'concat_space' => [
            'spacing' => 'one'
        ],
        'declare_equal_normalize' => [
            'space' => 'single'
        ],
        'explicit_indirect_variable' => true,
        'function_typehint_space' => true,
        'single_line_comment_style' => true,
        'linebreak_after_opening_tag' => true,
        'lowercase_cast' => true,
        'constant_case' => true,
        'lowercase_static_reference' => true,
        'method_chaining_indentation' => true,
        'multiline_comment_opening_closing' => true,
        'multiline_whitespace_before_semicolons' => true,
        'new_with_braces' => true,
        'no_alternative_syntax' => true,
        'no_blank_lines_after_class_opening' => true,
        'no_blank_lines_after_phpdoc' => true,
        'no_empty_comment' => true,
        'no_empty_phpdoc' => true,
        'no_empty_statement' => true,
        'no_extra_blank_lines' => [
            'break',
            'case',
            'continue',
            'curly_brace_block',
            'default',
            'extra',
            'parenthesis_brace_block',
            'return',
            'square_brace_block',
            'switch',
            'throw',
            'use',
            'useTrait',
            'use_trait'
        ],
        'no_leading_namespace_whitespace' => true,
        'no_multiline_whitespace_around_double_arrow' => true,
        'no_null_property_initialization' => true,
        'no_singleline_whitespace_before_semicolons' => true,
        'no_spaces_around_offset' => true,
        'no_superfluous_elseif' => true,
        'no_unneeded_control_parentheses' => true,
        'no_useless_else' => true,
        'no_useless_return' => true,
        'no_whitespace_before_comma_in_array' => true,
        'no_whitespace_in_blank_line' => true,
        'normalize_index_brace' => true,
        'nullable_type_declaration_for_default_null_value' => true,
        'object_operator_without_whitespace' => true,
        'phpdoc_add_missing_param_annotation' => true,
        'phpdoc_align' => [
            'align' => 'left'
        ],
        'phpdoc_indent' => true,
        'phpdoc_no_empty_return' => true,
        'phpdoc_order' => true,
        'phpdoc_return_self_reference' => true,
        'phpdoc_scalar' => true,
        'phpdoc_summary' => true,
        'phpdoc_to_comment' => true,
        'phpdoc_trim' => true,
        'phpdoc_trim_consecutive_blank_line_separation' => true,
        'return_type_declaration' => true,
        'semicolon_after_instruction' => true,
        'short_scalar_cast' => true,
        'simple_to_complex_string_variable' => true,
        'single_blank_line_at_eof' => true,
        'single_blank_line_before_namespace' => true,
        'single_quote' => true,
        'standardize_not_equals' => true,
        'ternary_operator_spaces' => true,
        'ternary_to_null_coalescing' => true,
        'trim_array_spaces' => true,
        'unary_operator_spaces' => true,
        'whitespace_after_comma_in_array' => true,
        'array_indentation' => true,
        'array_syntax' => [
            'syntax' => 'short'
        ],
        'blank_line_after_opening_tag' => true,
        'method_separation' => true,
        'binary_operator_spaces' => [
            'default' => 'single_space',
        ],
        'no_unused_imports' => true,
        'ordered_imports' => ['sort_algorithm' => 'alpha'],
    ])
    ->setLineEnding("\n");
