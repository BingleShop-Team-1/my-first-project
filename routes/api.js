const express = require('express');
const axios = require('axios');

const router = express.Router();

// Konfigurasi header Authorization
const authorization = 'Bearer ';
const apiBaseUrl = 'https://developer.fingerspot.io/api/';

// Helper untuk memanggil API eksternal
async function callApi(endpoint, data, res) {
    try {
        const response = await axios.post(`${apiBaseUrl}${endpoint}`, data, {
            headers: {
                'Content-Type': 'application/json',
                'Authorization': authorization
            }
        });
        res.json(response.data);
    } catch (error) {
        console.error(`Error calling ${endpoint}:`, error);
        res.status(500).json({ error: 'API call failed' });
    }
}

// Routes untuk setiap fungsi
router.post('/delete_userinfo', (req, res) => {
    const data = req.body;  // Contoh input JSON: {"trans_id":"1", "cloud_id":"C2630450C3233B26", "pin":"8"}
    callApi('delete_userinfo', data, res);
});

router.post('/get_allpin', (req, res) => {
    const data = req.body;
    callApi('get_allpin', data, res);
});

router.post('/get_attlog', (req, res) => {
    const data = req.body;
    callApi('get_attlog', data, res);
});

router.post('/get_registeronline', (req, res) => {
    const data = req.body;
    callApi('get_registeronline', data, res);
});

router.post('/get_userinfo', (req, res) => {
    const data = req.body;
    callApi('get_userinfo', data, res);
});

router.post('/restart_device', (req, res) => {
    const data = req.body;
    callApi('restart_device', data, res);
});

router.post('/set_time', (req, res) => {
    const data = req.body;
    callApi('set_time', data, res);
});

router.post('/set_userinfo', (req, res) => {
    const data = req.body;
    callApi('set_userinfo', data, res);
});

module.exports = router;
