# Loopon Coding Challenge 
We need a way of finding all the occurrences of a particular set of characters in a string. It should:

* Accept two strings as input. One called 'textToSearch' and one called 'subtext'
* The solution should match the subtext against the textToSearch, outputting the positions of the beginning of each match for the subtext within the textToSearch.
* Multiple matches are possible
* Matching is case insensitive
* If no matches have been found, no output is generated

## Technologies Used
* PHP 7
* Composer as package manager
* Phpunit for testing

## Prerequisites

Make sure that **Web server** (with Apache and PHP), **Git** and **Composer package manager** is already installed on the system. If not then follow the instructions to download and install all of these dependencies from the below links
* [Web server for Mac](https://www.mamp.info/en/downloads/)
* [Web server for Windows](http://www.wampserver.com/en/)
* [Git](https://git-scm.com/downloads)
* [Composer package manager](https://getcomposer.org/)


## Installation
The installation process is quite simple and straightforward. Just follow the below steps

1- Open the terminal and navigate into the root directory of the web server and then execute the below command to download the code from github
```
git clone https://github.com/waqasrazaq/loopon-exercise.git
```

2- Navigate into project directory (loopon-exercise) and execute the below command in the root directory.
```
composer install
```
Wait for the process to download and install all the required components and dependencies.

That's it. Our loopon-exercise application is installed and configured. Open the browser enter the base path and project url 

http://hostname:port/loopon-exercise/src/index.php

This page shows the output by calling the findSubTextOccurrences($textToSearch, $subtext) from Our custom StringHelper class.

### Execute Tests
Navigate into project root directory and Execute below command to run the tests
```
./vendor/bin/phpunit
```

## A brief introduction to files structure

* **src/StringHelper.php** This file contains main function "findSubTextOccurrences($textToSearch, $subtext)" which includes the Algorithm to find all the occurrences of subtext in to a Text. 

* **src/index.php** In this file, We're using the the above function and showing the output.

* **tests** Folder contains the files for all the test cases

* **vendor** - Contains all the composer dependencies

