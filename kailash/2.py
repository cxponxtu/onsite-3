from flask import Flask, jsonify

app = Flask(__name__)

@app.route('/kailash')
def kailash():
    return jsonify({'message': 'Reply from Kailash Second Server'})

if __name__ == '__main__':
    app.run(host='0.0.0.0',port=7778)