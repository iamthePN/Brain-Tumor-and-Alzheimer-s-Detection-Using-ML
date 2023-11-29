# Brain Tumor and Alzheimer Detection Using Machine Learning

## Table of Contents
- [About](#about)
- [System](#system)
- [Getting Started](#getting-started)
  - [Prerequisites](#prerequisites)
  - [Installation](#installation)

## About

The main goal of this project is to develop a machine-learning model that can accurately detect brain tumors and Alzheimer's disease at an early stage. 

## Features

Our proposed solution for detecting brain tumors and Alzheimer's disease using machine learning involves the use of deep learning algorithms such as convolutional neural networks (CNNs) and deploying the model on the web using Flask.
We created a web application system capable of identifying brain diseases in MRI-scanned images.

## Getting Started

Run "pip install -r requirements.txt" to install the Prerequisites Libraries

### Prerequisites

1) Xampp
2) Python
3) Libraries (Mentioned in "requirements.txt")

### Installation

1) Install Xampp and Setup PHP

2) Download and install XAMPP, which includes Apache and PHP.
    Set up XAMPP following the installation instructions.
    Insert the Database:
        Create a database named "bt_ad_detection" in your MySQL database server.
        Import the database schema provided in the project to set up the required tables.

3) Download the Models:

Download the required machine learning models from the following link: https://drive.google.com/drive/folders/1Auaer1QZmBQt8vtB4GvvFvJRkySo2PdF?usp=sharing
    Ensure you have the necessary permissions to download and use these models.
    Store the Models in the Project Folder:

4) Extract the downloaded models.
    Place the extracted model files in the designated folder within your project directory.

5) Run app.py:
    Navigate to the project folder in your terminal or command prompt.
    Execute the app.py script to start the application using "python app.py"