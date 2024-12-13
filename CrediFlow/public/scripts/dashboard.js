document.addEventListener("DOMContentLoaded", () => {
    // Graphique : Rapport dettes/paiements
    const ctx1 = document.getElementById('debtsChart').getContext('2d');
    new Chart(ctx1, {
        type: 'doughnut',
        data: {
            labels: ['Dettes', 'Paiements'],
            datasets: [{
                data: [67, 33],
                backgroundColor: ['#007bff', '#28a745'],
                hoverOffset: 4
            }]
        },
        options: {
            plugins: {
                legend: {
                    display: true,
                    position: 'bottom'
                }
            }
        }
    });

    // Graphique : Évolution des dettes
    const ctx2 = document.getElementById('evolutionChart').getContext('2d');
    new Chart(ctx2, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            datasets: [{
                label: 'Dettes',
                data: [12, 19, 3, 5, 2, 3],
                borderColor: '#007bff',
                borderWidth: 2,
                fill: false
            }]
        },
        options: {
            plugins: {
                legend: {
                    display: true,
                    position: 'top'
                }
            },
            scales: {
                x: {
                    beginAtZero: true
                },
                y: {
                    beginAtZero: true
                }
            }
        }
    });
});
