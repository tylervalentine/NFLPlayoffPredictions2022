# NFLPlayoffPredictions2022

## Table of Contents
* [Introduction](#Introduction)
* [Technologies](#Technologies)
* [Requirements](#Requirements)
* [Setup](#Setup)

### Introduction

A simple NFL Playoff Prediction template to fill out for the 2022 postseason. Results are written to a database and saved to see who got the most answers correct. Uses HTML, CSS and JavaScript for design, PHP and MySQL to process incoming answers.

### Technologies

### Requirements
1. PHP
2. Fair knowledge of terminal/command prompt usage

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
