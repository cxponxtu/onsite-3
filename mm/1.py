from flask import Flask, jsonify

app = Flask(__name__)

@app.route('/mm')
def kailash():
    return jsonify({'message': 'Reply from MegaMess First Server'})

if __name__ == '__main__':
    app.run(host='0.0.0.0',port=7777)