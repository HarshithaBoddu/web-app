# -*- coding: utf-8 -*-
"""
Created on Fri May 29 06:19:58 2020

@author: B RAVI KUMAR
"""
from flask import Flask, render_template, request, redirect
import pickle
import webbrowser

model = pickle.load(open('covidrisk.pkl','rb'))
scalar = pickle.load(open('scalar.pkl','rb'))

app = Flask(__name__)
@app.route('/')
def home():
    return render_template("index.html")

#@app.route('/department')
#def dept():
    #return render_template("departments.html")

@app.route('/login', methods = ['POST'] )
def login():
    age = request.form['age']
    gender = request.form['gender']
    if(gender == "female"):
        g=0
    if(gender == "male"):
        g=1
    taste = request.form['taste']
    if(taste == "no"):
        t=0
    if(taste == "yes"):
        t=1
    fever = request.form['fever']
    if(fever == "no"):
        f=0
    if(fever == "yes"):
        f=1
    cough = request.form['cough']
    if(cough == "no"):
        c=0
    if(cough == "yes"):
        c=1
    fatigue = request.form['fatigue']
    if(fatigue == "no"):
        fa=0
    if(fatigue == "yes"):
        fa=1
    throat = request.form['throat']
    if(throat == "no"):
        th=0
    if(throat == "yes"):
        th=1

    total = [[int(age),g,t,f,c,fa,th]]
    y_pred = model.predict(scalar.transform((total)))
    
    if(y_pred==[0]):
        ans="You are at a higher risk of getting affected.......sorry!! your appointment cannot be booked"
    elif(y_pred==[1]):
        ans="You are at a lower risk of getting affected........You can go ahead and book the appointment"
        #return redirect(url_for('department'))
        webbrowser.open("http://care-4-you.herokuapp.com/medino/departments.html");
    else:
        ans="You are at a moderate risk of getting affected.....You can go ahead and book the appointment"
        #return redirect(url_for('department'))
        webbrowser.open("http://care-4-you.herokuapp.com/medino/departments.html");

    return render_template("index.html", showcase = ans)
     
        
        
        

if __name__ == '__main__':
    app.run(debug = False)
