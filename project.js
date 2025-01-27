const mongoose = require('mongoose');

mongoose.connect('mongodb://localhost:27017/portfolio', { useNewUrlParser: true, useUnifiedTopology: true })
    .then(() => console.log('MongoDBに接続しました'))
    .catch(err => console.error('MongoDBの接続に失敗しました', err));

const projectSchema = new mongoose.Schema({
    name: String,
    description: String,
});

const Project = mongoose.model('Project', projectSchema);

module.exports = Project;
