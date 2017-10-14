<?php

class Html
{

    /**
     * Renders single input with label
     *
     * @param  string $name       Input type (no textareas yet)
     * @param  array  $attributes Configurations for form (including label title)
     * @return string
     */
    public static function input(string $name, array $attributes):string
    {
        $input =  "<input type='$name' ";
        foreach ($attributes as $name => $value) {
            $input .= is_bool($value) ? $name : "$name='$value'";
        }
        $input .= "/>";
        $input = self::label(array_key_exists('label', $attributes) ? sprintf('%s%s', $attributes['label'], $input) : $input);
        return $input;
    }

    /**
     * Warps content with a label
     *
     * @param  string $content
     * @return string
     */
    protected static function label(string $content):string {
        return "<label>$content</label><br>";
    }

}

class Form
{

    /**
     * Widget instance
     * @var string $widget
     */
    public static $widget;

    /**
     * Configurations for builder
     * @var array $config
     */
    protected static $config;

    /**
     * Runs the builder && sets the configurations
     *
     * @param  array $config Inputs configuration
     * @return string
     */
    public static function widget(array $config = []) : string
    {
        self::$config = $config;
        self::build();
        return self::$widget;
    }

    /**
     * Builds the component widget
     *
     * @return void
     */
    protected static function build() : void
    {
        foreach (self::$config as $key => $value) {
            self::$widget .= Html::input($key, $value);
        }
    }

    /**
     * closed method
     */
    private function __construct(){}

    /**
     * closed method
     */
    private function __clone(){}

    /**
     * closed method
     */
    private function __sleep(){}

    /**
     * closed method
     */
    private function __wakeup(){}

}


echo Form::widget(
    [
        'text' => [
            'label' => 'Name',
            'class' => 'form-control',
            'placeholder' => 'Your name',
            'data-action-async' => true,
        ],
        'email' => [
            'label' => 'Email',
            'class' => 'form-control',
            'placeholder' => 'Your email',
        ]
    ]
);

die;