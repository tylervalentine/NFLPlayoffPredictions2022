# NFLPlayoffPredictions2022

## Table of Contents
* [Introduction](#Introduction)
* [Technologies](#Technologies)
* [Requirements](#Requirements)
* [Setup](#Setup)
* [Code Examples](#CodeExamples)

### Introduction

NFLPlayoffPredictions2022 is a simple form document used to process inputs by a user and submit them to a database. This project is a training project used to get more familiar with front-end languages such as CSS and JavaScript, and to understand functionality between back-end and front-end aspects of coding. Once the form is running, it will ask the user for the winners of each National Football League (NFL) playoff game winner of 2022 and submit each answer incrementally. The code will also use each answer to calculate seeding for future games, which will be further discussed in a later section. The final submit button at the bottom of the form will send all previous answers to a database to store for future use. 

### Technologies
* [HTML](https://html.com)
* [CSS](https://developer.mozilla.org/en-US/docs/Web/CSS)
* [JavaScript](https://www.javascript.com)
* [PHP 7.3.29](https://www.php.net/releases)
* [MySQL 8.0.26](https://www.mysql.com)
  

### Requirements
1. [PHP 7.3.29](https://www.php.net/releases)
2. Fair knowledge of terminal/command prompt usage
3. A working web browser

### Setup

1. Download code, unzip file
2. Navigate to the directory in the terminal:
```
  cd <directory of downloaded file>
```
4. Once in the directory, run this command: 
```
  php -S 127.0.0.1:8000
```
5. Open this URL in your web browser:
```
  127.0.0.1:8000/prediction.php
```
7. Enter your prediction for each game and hit the "submit" button each time to submit answers.
8. The final submit button will submit all answers to the database!

### Files

#### prediction.php

This file designs the form document using HTML, CSS, and JavaScript, used to get results from text prompts. It includes code for the visuals such as the submit buttons, text prompts, and the background image used. Seeding calculations are also done in this file using JavaScript algorithms behind the scenes based on user input. These results are saved to submit to 'info.php' for further action.

#### info.php

This file processes incoming data from 'prediction.php' using PHP and connects to a MySQL database to input data given from the form document. A direct connection is used to a MySQL database and a single command is used to store all inputs into the database. The file also provides feedback to how the connection and query processing went, stating 'thank you for your feedback!' if it was successful, and subsequentially 'please try again' if the submission was not sucessful.  

#### lombardi-trophy.png

This is the background image used in the form document.

### CodeExamples

