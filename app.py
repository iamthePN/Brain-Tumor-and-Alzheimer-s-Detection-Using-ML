from flask import Flask, render_template, request, redirect, url_for, session
from flask import Flask, render_template, request
from keras.models import load_model
import numpy as np
import cv2
from PIL import Image
from keras_preprocessing import image
from keras.models import Sequential
from werkzeug.utils import secure_filename
import os
import mysql.connector

connection = mysql.connector.connect(host='localhost',database='bt_ad_detection', username='root', password='')
cursor =connection.cursor()

app = Flask(__name__,static_url_path='/static')
model=load_model('BrainTumorDetection_10Epochs_Categorical.h5')
print('Model 1 loaded. Open: http://127.0.0.1:5000/')
model2=load_model('AlzheimerDetection001.h5')
print('Model 2 loaded. Open: http://127.0.0.1:5000/')
app.secret_key = "super secret key"

def get_className(classNo):
	if classNo==0:
		return "No Brain Tumor"
	elif classNo==1:
		return "Yes Brain Tumor"

def get_className_AD(class_names):
    if class_names == 2:
        return "No Alzheimer"
    elif class_names == 3:
        return "Very Mild Alzheimer"
    elif class_names == 0:
        return "Mild Alzheimer"
    elif class_names == 1:
        return "Moderate Alzheimer"


	
def getResult(img):
    image=cv2.imread(img)
    image = Image.fromarray(image, 'RGB')
    image = image.resize((64, 64))
    image=np.array(image)
    input_img = np.expand_dims(image, axis=0)
    result=model.predict(input_img)
    classes_result=np.argmax(result,axis=1)
    return classes_result

def getResultAD(imgAD):
    imageAD=cv2.imread(imgAD)
    #imageAD = imageAD.fromarray(imageAD, 'RGB')
    #imageAD = imageAD.resize((64, 64))
    imageAD=np.array(imageAD)
    input_imgAD = np.expand_dims(imageAD, axis=0)
    resultAD=model2.predict(input_imgAD)
    classes_result_AD=np.argmax(resultAD,axis=1)
    return classes_result_AD
    


# Replace the following with your database connection details


@app.route('/')
def home():
    return render_template('login.php')

@app.route('/reg')
def reg():
    return render_template("reg.php")

@app.route('/login', methods=['POST', 'GET'])
def login():
    msg=''
    if request.method=='POST':
        username = request.form['email']
        password = request.form['pass']
        cursor.execute('SELECT * FROM user WHERE Email=%s AND Password = %s',(username,password))
        record = cursor.fetchone()
        if record:
            session['logged_in'] = True
            session['email'] = record[1]
            return redirect(url_for('index'))
        else:
            return redirect(url_for('invalid'))
    return render_template('login.php')



@app.route('/index')
def index():
    return render_template("index.php",username= session['email'])

@app.route('/profile')
def profile():
    return render_template('profile.php')

@app.route('/log')
def log():
    return render_template('entry.html')

@app.route('/invalid')
def invalid():
    return render_template('invalid.php')

@app.route('/bt')
def bt():
    return render_template("B_T.php")


@app.route('/predict', methods=['GET', 'POST'])
def upload():
    if request.method == 'POST':
        f = request.files['file']

        basepath = os.path.dirname(__file__)
        file_path = os.path.join(basepath, 'uploads', secure_filename(f.filename))
        f.save(file_path)
        value = getResult(file_path)
        result = get_className(value)
        return render_template('predict.html', result=result)
    return None


@app.route('/predictAD', methods=['GET', 'POST'])
def uploadAD():
    if request.method == 'POST':
        f = request.files['imgAD']

        basepath = os.path.dirname(__file__)
        file_path = os.path.join(basepath, 'uploads', secure_filename(f.filename))
        f.save(file_path)
        valueAD = getResultAD(file_path)
        resultAD = get_className_AD(valueAD)
        return render_template('predictAD.html', resultAD=resultAD)
    return None
    
@app.route('/ad')
def ad():
    return render_template("AD.php")


if __name__ == '__main__':
    app.run(debug=True)
