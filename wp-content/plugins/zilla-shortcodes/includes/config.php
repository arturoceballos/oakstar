<?php
/**
 * Define the shortcode parameters
 *
 * @package ZillaShortcodes
 * @since 1.0
 */

/* Button Config --- */

$zilla_shortcodes['button'] = array(
	'title' => __('Button', 'tzsc'),
	'id' => 'tzsc-button-shortcode',
	'template' => '[zilla_button {{attributes}}] {{content}} [/zilla_button]',
	'params' => array(
		'url' => array(
			'std' => 'http://example.com',
			'type' => 'text',
			'label' => __('Button URL', 'tzsc'),
			'desc' => __('Add the button\'s url eg http://example.com', 'tzsc')
		),
		'style' => array(
			'type' => 'select',
			'label' => __('Button Style', 'tzsc'),
			'desc' => __('Select the button\'s style, ie the button\'s colour', 'tzsc'),
			'options' => array(
				'grey' => 'Grey',
				'black' => 'Black',
				'green' => 'Green',
				'light-blue' => 'Light Blue',
				'blue' => 'Blue',
				'red' => 'Red',
				'orange' => 'Orange',
				'purple' => 'Purple'
			)
		),
		'size' => array(
			'type' => 'select',
			'label' => __('Button Size', 'tzsc'),
			'desc' => __('Select the button\'s size', 'tzsc'),
			'options' => array(
				'small' => 'Small',
				'medium' => 'Medium',
				'large' => 'Large'
			)
		),
		'type' => array(
			'type' => 'select',
			'label' => __('Button Type', 'tzsc'),
			'desc' => __('Select the button\'s type', 'tzsc'),
			'options' => array(
				'round' => 'Round',
				'square' => 'Square'
			)
		),
		'target' => array(
			'type' => 'select',
			'label' => __('Button Target', 'tzsc'),
			'desc' => __('Set the browser behavior for the click action.', 'tzsc'),
			'options' => array(
				'_self' => 'Same window',
				'_blank' => 'New window'
			)
		),
		'content' => array(
			'std' => 'Button Text',
			'type' => 'text',
			'label' => __('Button\'s Text', 'tzsc'),
			'desc' => __('Add the button\'s text', 'tzsc'),
		)
	)
);

/* Alert Config --- */

$zilla_shortcodes['alert'] = array(
	'title' => __('Alert', 'tzsc'),
	'id' => 'tzsc-alert-shortcode',
	'template' => '[zilla_alert {{attributes}}] {{content}} [/zilla_alert]',
	'params' => array(
		'style' => array(
			'type' => 'select',
			'label' => __('Alert Style', 'tzsc'),
			'desc' => __('Select the alert\'s style, ie the alert colour', 'tzsc'),
			'options' => array(
				'white' => 'White',
				'grey' => 'Grey',
				'red' => 'Red',
				'yellow' => 'Yellow',
				'green' => 'Green'
			)
		),
		'content' => array(
			'std' => 'Your Alert!',
			'type' => 'textarea',
			'label' => __('Alert Text', 'tzsc'),
			'desc' => __('Add the alert\'s text', 'tzsc'),
		)

	)
);

/* Toggle Config --- */

$zilla_shortcodes['toggle'] = array(
	'title' => __('Toggle', 'tzsc'),
	'id' => 'tzsc-toggle-shortcode',
	'template' => ' {{child_shortcode}} ', // There is no wrapper shortcode
	'notes' => __('Click \'Add Toggle\' to add a new toggle. Drag and drop to reorder toggles.', 'tzsc'),
	'params' => array(),
	'child_shortcode' => array(
		'params' => array(
			'title' => array(
				'type' => 'text',
				'label' => __('Toggle Content Title', 'tzsc'),
				'desc' => __('Add the title that will go above the toggle content', 'tzsc'),
				'std' => 'Title'
			),
			'content' => array(
				'std' => 'Content',
				'type' => 'textarea',
				'label' => __('Toggle Content', 'tzsc'),
				'desc' => __('Add the toggle content. Will accept HTML', 'tzsc'),
			),
			'state' => array(
				'type' => 'select',
				'label' => __('Toggle State', 'tzsc'),
				'desc' => __('Select the state of the toggle on page load', 'tzsc'),
				'options' => array(
					'open' => 'Open',
					'closed' => 'Closed'
				)
			)
		),
		'template' => '[zilla_toggle {{attributes}}] {{content}} [/zilla_toggle]',
		'clone_button' => __('Add Toggle', 'tzsc')
	)
);

/* Tabs Config --- */

$zilla_shortcodes['tabs'] = array(
    'title' => __('Tab', 'tzsc'),
    'id' => 'tzsc-tabs-shortcode',
    'template' => '[zilla_tabs] {{child_shortcode}} [/zilla_tabs]',
    'notes' => __('Click \'Add Tag\' to add a new tag. Drag and drop to reorder tabs.', 'tzsc'),
    'params' => array(),
    'child_shortcode' => array(
        'params' => array(
            'title' => array(
                'std' => 'Title',
                'type' => 'text',
                'label' => __('Tab Title', 'tzsc'),
                'desc' => __('Title of the tab.', 'tzsc'),
            ),
            'content' => array(
                'std' => 'Tab Content',
                'type' => 'textarea',
                'label' => __('Tab Content', 'tzsc'),
                'desc' => __('Add the tabs content.', 'tzsc')
            )
        ),
        'template' => '[zilla_tab {{attributes}}] {{content}} [/zilla_tab]',
        'clone_button' => __('Add Tab', 'tzsc')
    )
);

/* Columns Config --- */

$zilla_shortcodes['columns'] = array(
	'title' => __('Columns', 'tzsc'),
	'id' => 'tzsc-columns-shortcode',
	'template' => ' {{child_shortcode}} ', // There is no wrapper shortcode
	'notes' => __('Click \'Add Column\' to add a new column. Drag and drop to reorder columns.', 'tzsc'),
	'params' => array(),
	'child_shortcode' => array(
		'params' => array(
			'column' => array(
				'type' => 'select',
				'label' => __('Column Type', 'tzsc'),
				'desc' => __('Select the width of the column.', 'tzsc'),
				'options' => array(
					'one-third' => __('One Third', 'tzsc'),
					'two-third' => __('Two Thirds', 'tzsc'),
					'one-half' => __('One Half', 'tzsc'),
					'one-fourth' => __('One Fourth', 'tzsc'),
					'three-fourth' => __('Three Fourth', 'tzsc'),
					'one-fifth' => __('One Fifth', 'tzsc'),
					'two-fifth' => __('Two Fifth', 'tzsc'),
					'three-fifth' => __('Three Fifth', 'tzsc'),
					'four-fifth' => __('Four Fifth', 'tzsc'),
					'one-sixth' => __('One Sixth', 'tzsc'),
					'five-sixth' => __('Five Sixth', 'tzsc')
				)
			),
			'last' => array(
				'type' => 'checkbox',
				'label' => __('Last column', 'tzsc'),
				'desc' => __('Set whether this is the last column.', 'tzsc'),
				'default' => false
			),
			'content' => array(
				'std' => __('Column content', 'tzsc'),
				'type' => 'textarea',
				'label' => __('Column Content', 'tzsc'),
				'desc' => __('Add the column content.', 'tzsc')
			)
		),
		'template' => '[zilla_column {{attributes}}] {{content}} [/zilla_column]',
		'clone_button' => __('Add Column', 'tzsc')
	)
);

?>