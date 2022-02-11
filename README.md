# NFLPlayoffPredictions2022

## Table of Contents
* [Introduction](#Introduction)
* [Technologies](#Technologies)
* [Requirements](#Requirements)
* [Setup](#Setup)

### Introduction

NFLPlayoffPredictions2022 is a simple form document used to process inputs by a user and submit them to a database. This project is a training project used to get more familiar with front-end languages such as CSS and JavaScript, and to understand functionality between back-end and front-end aspects of coding. Once the form is running, it will ask the user for the winners of each National Football League (NFL) playoff game winner of 2022 and submit each answer incrementally. The code will also use each answer to calculate seeding for future games, which will be further discussed in an upcoming section. The final submit button at the bottom of the form will send all previous answers to a database to store for future use. 

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

Designs page using HTML, CSS, and JavaScript, used to get results from text prompts

#### info.php

Processes incoming data using PHP and connects to MySQL database to input data given from HTML page

#### lombardi-trophy.png

-Background image used
