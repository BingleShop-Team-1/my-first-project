const express = require('express');

module.exports = function (db) {
    const router = express.Router();

    router.get('/', (req, res) => {
        db.query('SELECT * FROM t_log', (err, results) => {
            if (err) {
                console.error('Error fetching logs:', err);
                return res.status(500).json({ error: 'Failed to fetch logs' });
            }
            res.json(results);
        });
    });

    return router;
};
