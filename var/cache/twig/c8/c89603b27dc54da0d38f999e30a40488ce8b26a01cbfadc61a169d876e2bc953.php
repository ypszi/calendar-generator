<?php

/* calendar.html.twig */
class __TwigTemplate_7106854fd707e7ba656187796479a43ba8bc738da673375d354899a18a03f74b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
<head>
    <link href=\"https://fonts.googleapis.com/css?family=Indie+Flower\" rel=\"stylesheet\">
    <link href=\"assets/calendar.css\" rel=\"stylesheet\">
</head>
<body>
";
        // line 7
        $context["dayCountOnLastWeek"] = 3;
        // line 8
        echo twig_escape_filter($this->env, range(0, twig_reverse_filter($this->env, ($context["dayCountOnLastWeek"] ?? null))), "html", null, true);
        echo "

";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["calendar"] ?? null));
        foreach ($context['_seq'] as $context["year"] => $context["months"]) {
            // line 11
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["months"]);
            foreach ($context['_seq'] as $context["month"] => $context["weeks"]) {
                // line 12
                echo "        <table class='calendar'>
            <thead>
            <tr>
                <th colspan='7'>";
                // line 15
                echo twig_escape_filter($this->env, $context["year"], "html", null, true);
                echo "</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td colspan='7' class='monthName'>";
                // line 20
                echo twig_escape_filter($this->env, (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = ($context["monthNames"] ?? null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[$context["month"]] ?? null) : null), "html", null, true);
                echo "</td>
            </tr>
            <tr>
                ";
                // line 23
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["dayNames"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["dayName"]) {
                    // line 24
                    echo "                    <td class='dayName'>";
                    echo twig_escape_filter($this->env, $context["dayName"], "html", null, true);
                    echo "</td>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dayName'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                echo "            </tr>

            ";
                // line 28
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["weeks"]);
                foreach ($context['_seq'] as $context["week"] => $context["days"]) {
                    // line 29
                    echo "            ";
                    $context["dayCountOnLastWeek"] = twig_length_filter($this->env, $context["days"]);
                    // line 30
                    echo "            <tr>
                ";
                    // line 31
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["days"]);
                    foreach ($context['_seq'] as $context["dayIndex"] => $context["day"]) {
                        // line 32
                        echo "                    ";
                        if (((($context["dayCountOnLastWeek"] ?? null) < 7) && ($context["dayIndex"] == 1))) {
                            // line 33
                            echo "                        ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(range(0, twig_reverse_filter($this->env, ($context["dayCountOnLastWeek"] ?? null))));
                            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                                // line 34
                                echo "                            <td class='day'>
                                <span style=\"color: #00ee00;\">";
                                // line 35
                                echo twig_escape_filter($this->env, ($context["dayCountOnLastWeek"] ?? null), "html", null, true);
                                echo "</span>
                            </td>
                        ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 38
                            echo "                    ";
                        }
                        // line 39
                        echo "
                    <td class='day'>";
                        // line 40
                        echo twig_escape_filter($this->env, $context["dayIndex"], "html", null, true);
                        echo "</td>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['dayIndex'], $context['day'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 42
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['week'], $context['days'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                echo "            </tr>
        </table>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['month'], $context['weeks'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['year'], $context['months'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "calendar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 47,  137 => 43,  131 => 42,  123 => 40,  120 => 39,  117 => 38,  108 => 35,  105 => 34,  100 => 33,  97 => 32,  93 => 31,  90 => 30,  87 => 29,  83 => 28,  79 => 26,  70 => 24,  66 => 23,  60 => 20,  52 => 15,  47 => 12,  42 => 11,  38 => 10,  33 => 8,  31 => 7,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
<head>
    <link href=\"https://fonts.googleapis.com/css?family=Indie+Flower\" rel=\"stylesheet\">
    <link href=\"assets/calendar.css\" rel=\"stylesheet\">
</head>
<body>
{% set dayCountOnLastWeek = 3 %}
{{ 0..dayCountOnLastWeek|reverse }}

{% for year, months in calendar %}
    {% for month, weeks in months %}
        <table class='calendar'>
            <thead>
            <tr>
                <th colspan='7'>{{ year }}</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td colspan='7' class='monthName'>{{ monthNames[month] }}</td>
            </tr>
            <tr>
                {% for dayName in dayNames %}
                    <td class='dayName'>{{ dayName }}</td>
                {% endfor %}
            </tr>

            {% for week, days in weeks %}
            {% set dayCountOnLastWeek = days|length %}
            <tr>
                {% for dayIndex, day in days %}
                    {% if dayCountOnLastWeek < 7 and dayIndex == 1 %}
                        {% for i in 0..dayCountOnLastWeek|reverse %}
                            <td class='day'>
                                <span style=\"color: #00ee00;\">{{ dayCountOnLastWeek }}</span>
                            </td>
                        {% endfor %}
                    {% endif %}

                    <td class='day'>{{ dayIndex }}</td>
                {% endfor %}
                {% endfor %}
            </tr>
        </table>
    {% endfor %}
{% endfor %}

</body>
</html>
", "calendar.html.twig", "/home/ypszi/projects/calendar-generator/src/views/calendar.html.twig");
    }
}
