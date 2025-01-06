const express = require('express');

module.exports = function (db) {
    const router = express.Router();

    router.post('/', (req, res) => {
        const originalData = req.body;

        if (!originalData.type || !originalData.cloud_id) {
            return res.status(400).json({ error: 'Missing required fields' });
        }

        const encodedData = JSON.stringify(originalData);
        const createdAt = new Date().toISOString().slice(0, 19).replace('T', ' ');

        const sql = "INSERT INTO t_log (cloud_id, type, created_at, original_data) VALUES (?, ?, ?, ?)";
        db.query(sql, [originalData.cloud_id, originalData.type, createdAt, encodedData], (err, result) => {
            if (err) {
                console.error('Error inserting data:', err);
                return res.status(500).json({ error: 'Failed to store data' });
            }
            res.json({ message: 'Data stored successfully' });
        });
    });

    return router;
};
