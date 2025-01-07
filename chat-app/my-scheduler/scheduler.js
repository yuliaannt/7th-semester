const schedule = require('node-schedule');

// Jadwalkan tugas untuk dijalankan setiap detik
const job = schedule.scheduleJob('* * * * * *', function(){
    console.log('Tugas dijalankan setiap detik:', new Date());
});

// Menambahkan logika untuk menghentikan scheduler setelah 10 detik
setTimeout(() => {
    job.cancel();
    console.log('Scheduler dihentikan.');
}, 10000);