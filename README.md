Phing Drush Task
----------------------------------
A Drush task for [Phing](http://www.phing.info/). This task enable usage of Drush commands in Phing build scripts.

Phing provides tools for usual tasks for PHP projects (phplint, jslint, VCS checkouts, files copy or merge, packaging, upload, etc.). Integration of Drush in Phing is particularly useful when building and testing Drupal projects in a continuous integration server such as [Jenkins](http://jenkins-ci.org/).
 
Installation and Usage
----------------------------------
To use the drush task in your build file,  it must be made available to Phing so that the buildfile parser is aware a correlating XML element and it's parameters. This is done by adding a `<taskdef>` task to your build file:

```
  <taskdef name="drush" classname="Drush\Task" />
```

See the [Phing documentation](http://www.phing.info/docs/guide/stable/chapters/appendixes/AppendixB-CoreTasks.html#TaskdefTask) for more information on the `<taskdef>` task.

Base Drush options are mapped to attribute of the Drush task. Parameters are wrapped in elements. Value of a parameter is defined by the text child of the element. Options are mapped to elements with a name attribute. Value of an option can either be in the value attribute of the element or as text child (like params).

The drush command for installing Drupal:

`drush site-install --yes --locale=uk --site-name =${sitename} expert`

... would be written in a Phing build file as:

```
  <drush command="site-install" assume="yes"">
    <option name="locale">uk</option>
    <option name="site-name" value="${sitename}" />
    <param>expert</param>
  </drush> 
```

More sample usages are provided in the template build script at [reload.github.io/phing-drupal-template](https://reload.github.io/phing-drupal-template/).
