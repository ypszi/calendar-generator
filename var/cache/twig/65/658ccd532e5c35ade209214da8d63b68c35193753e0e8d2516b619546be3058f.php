<?php

/* calendar.html.twig */
class __TwigTemplate_137819682481d216827f3957454f053bc278a7b0ec106a6b1be9806a910605ef extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["calendar"] ?? null));
        foreach ($context['_seq'] as $context["year"] => $context["months"]) {
            // line 8
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["months"]);
            foreach ($context['_seq'] as $context["month"] => $context["weeks"]) {
                // line 9
                echo "        <table class='calendar'>
            <thead>
            <tr>
                <th colspan='7'>";
                // line 12
                echo twig_escape_filter($this->env, $context["year"], "html", null, true);
                echo "</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td colspan='7' class='monthName'>";
                // line 17
                echo twig_escape_filter($this->env, (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = ($context["monthNames"] ?? null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[$context["month"]] ?? null) : null), "html", null, true);
                echo "</td>
            </tr>
            <tr>
                ";
                // line 20
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["dayNames"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["dayName"]) {
                    // line 21
                    echo "                    <td class='dayName'>";
                    echo twig_escape_filter($this->env, $context["dayName"], "html", null, true);
                    echo "</td>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dayName'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "            </tr>

            ";
                // line 25
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["weeks"]);
                foreach ($context['_seq'] as $context["week"] => $context["days"]) {
                    // line 26
                    echo "            ";
                    $context["dayCountOnLastWeek"] = twig_length_filter($this->env, $context["days"]);
                    // line 27
                    echo "            ";
                    $context["trimCount"] = (7 - ($context["dayCountOnLastWeek"] ?? null));
                    // line 28
                    echo "            <tr>
                ";
                    // line 29
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["days"]);
                    foreach ($context['_seq'] as $context["dayIndex"] => $context["day"]) {
                        // line 30
                        echo "                    ";
                        if (((($context["dayCountOnLastWeek"] ?? null) < 7) && ($context["dayIndex"] == 1))) {
                            // line 31
                            echo "                        ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(range(1, ($context["trimCount"] ?? null)));
                            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                                // line 32
                                echo "                            <td class='day'></td>
                        ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 34
                            echo "                    ";
                        }
                        // line 35
                        echo "
                    <td class='day'>";
                        // line 36
                        echo twig_escape_filter($this->env, $context["dayIndex"], "html", null, true);
                        echo "</td>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['dayIndex'], $context['day'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 38
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['week'], $context['days'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
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
        // line 43
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
        return array (  140 => 43,  128 => 39,  122 => 38,  114 => 36,  111 => 35,  108 => 34,  101 => 32,  96 => 31,  93 => 30,  89 => 29,  86 => 28,  83 => 27,  80 => 26,  76 => 25,  72 => 23,  63 => 21,  59 => 20,  53 => 17,  45 => 12,  40 => 9,  35 => 8,  31 => 7,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
<head>
    <link href=\"https://fonts.googleapis.com/css?family=Indie+Flower\" rel=\"stylesheet\">
    <link href=\"assets/calendar.css\" rel=\"stylesheet\">
</head>
<body>
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
            {% set trimCount = 7 - dayCountOnLastWeek %}
            <tr>
                {% for dayIndex, day in days %}
                    {% if dayCountOnLastWeek < 7 and dayIndex == 1 %}
                        {% for i in 1..trimCount %}
                            <td class='day'></td>
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
