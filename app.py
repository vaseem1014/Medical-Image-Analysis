
from flask import Flask, request, jsonify, render_template
from PIL import Image
import numpy as np
from tensorflow.keras.applications.vgg16 import preprocess_input
from tensorflow.keras.models import load_model

app = Flask(_name_)
model = load_model('/Users/shashankbyalla/Project/my_model.keras')

def preprocess_image(image):
    # Preprocess the image for input to the model
    img = image.resize((224, 224))
    img = np.array(img)
    img = preprocess_input(img)
    return img

@app.route('/predict', methods=['POST'])
def predict():
    if 'file' not in request.files:
        return jsonify({'error': 'No file part'})
    file = request.files['file']
    if file.filename == '':
        return jsonify({'error': 'No selected file'})
    image = Image.open(file)
    processed_image = preprocess_image(image)
    prediction = model.predict(np.array([processed_image]))
    # Assuming you have a list of classes for the model
    classes = ['class_1', 'class_2', 'class_3']
    predicted_class = classes[np.argmax(prediction)]
    return jsonify({'prediction': predicted_class})

@app.route('/')
def index():
    return render_template('/Users/shashankbyalla/Project/index.html')

if _name_ == '_main_':
    app.run(debug=True)