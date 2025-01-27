const express = require('express');
const app = express();
const port = 3000;

app.get('/api/projects', (req, res) => {
    res.json([
        { id: 1, name: 'プロジェクト1', description: '詳細を記載します。' },
        { id: 2, name: 'プロジェクト2', description: '詳細を記載します。' },
    ]);
});

app.listen(port, () => {
    console.log(`サーバーがhttp://localhost:${port}で起動しました`);
});
