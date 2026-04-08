
        // Initialize the dashboard
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize tree map
            initializeTreeMap();
            
            // Initialize growth chart
            initializeGrowthChart();
            
            // Initialize progress ring
            initializeProgressRing();
            
            // Show welcome notification
            setTimeout(() => {
                showNotification('Welcome Back!', 'Your trees have grown 5% since yesterday!', 'success');
            }, 1000);
            
            // Simulate tree growth
            simulateTreeGrowth();
            
            // Handle responsive behavior
            handleResponsive();
        });

        // Handle responsive behavior
        function handleResponsive() {
            // Check screen size on load
            checkScreenSize();
            
            // Check screen size on resize
            window.addEventListener('resize', checkScreenSize);
        }

        // Check screen size and adjust UI
        function checkScreenSize() {
            const width = window.innerWidth;
            
            if (width < 1024) {
                // Mobile/Tablet behavior
                document.querySelector('.sidebar').classList.remove('active');
                document.querySelector('.mobile-overlay').classList.remove('active');
            } else {
                // Desktop behavior
                document.querySelector('.sidebar').classList.add('active');
            }
        }

        // Toggle sidebar on mobile
        function toggleSidebar() {
            const sidebar = document.querySelector('.sidebar');
            const overlay = document.querySelector('.mobile-overlay');
            
            sidebar.classList.toggle('active');
            overlay.classList.toggle('active');
        }

        // Initialize Tree Map
        function initializeTreeMap() {
            const treeMap = document.getElementById('treeMap');
            treeMap.innerHTML = '';
            
            const treePoints = [
                { top: '30%', left: '40%', type: 'user' },
                { top: '60%', left: '25%', type: 'user' },
                { top: '45%', left: '65%', type: 'user' },
                { top: '20%', left: '70%', type: 'community' },
                { top: '75%', left: '55%', type: 'community' },
                { top: '35%', left: '20%', type: 'community' },
                { top: '65%', left: '75%', type: 'user' },
                { top: '25%', left: '50%', type: 'community' }
            ];

            treePoints.forEach((point, index) => {
                const treePoint = document.createElement('div');
                treePoint.className = 'tree-point';
                treePoint.style.top = point.top;
                treePoint.style.left = point.left;
                treePoint.style.background = point.type === 'user' ? 'var(--primary)' : 'var(--secondary)';
                treePoint.style.opacity = '0';
                
                // Animate each point with delay
                setTimeout(() => {
                    treePoint.style.opacity = '1';
                    treePoint.style.transform = 'translate(-50%, -50%) scale(1)';
                }, index * 100);
                
                treePoint.onclick = function() {
                    showNotification(
                        'Tree Details',
                        point.type === 'user' ? 'Your tree planted 45 days ago' : 'Community tree - Planted by Rajesh',
                        'info'
                    );
                };
                
                treeMap.appendChild(treePoint);
            });
        }

        // Initialize Growth Chart
        function initializeGrowthChart() {
            const ctx = document.getElementById('growthChart').getContext('2d');
            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                    datasets: [{
                        label: 'Tree Growth %',
                        data: [30, 45, 60, 75, 85, 95],
                        borderColor: '#10B981',
                        backgroundColor: 'rgba(16, 185, 129, 0.1)',
                        borderWidth: 2,
                        fill: true,
                        tension: 0.4,
                        pointBackgroundColor: '#10B981',
                        pointBorderColor: '#fff',
                        pointBorderWidth: 2,
                        pointRadius: 4,
                        pointHoverRadius: 6
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: true,
                            position: 'top',
                            labels: {
                                font: {
                                    size: 12
                                }
                            }
                        },
                        tooltip: {
                            backgroundColor: 'rgba(31, 41, 55, 0.9)',
                            titleColor: '#fff',
                            bodyColor: '#fff',
                            borderColor: '#10B981',
                            borderWidth: 1,
                            cornerRadius: 6,
                            padding: 10,
                            titleFont: {
                                size: 12
                            },
                            bodyFont: {
                                size: 12
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                color: 'rgba(0, 0, 0, 0.05)'
                            },
                            ticks: {
                                font: {
                                    size: 11
                                },
                                callback: function(value) {
                                    return value + '%';
                                }
                            }
                        },
                        x: {
                            grid: {
                                color: 'rgba(0, 0, 0, 0.05)'
                            },
                            ticks: {
                                font: {
                                    size: 11
                                }
                            }
                        }
                    }
                }
            });
        }

        // Initialize Progress Ring
        function initializeProgressRing() {
            const progressValue = 83;
            const progressFill = document.getElementById('progressFill');
            const radius = 90;
            const circumference = 2 * Math.PI * radius;
            
            // Set the stroke dash array and offset
            progressFill.style.strokeDasharray = `${circumference} ${circumference}`;
            progressFill.style.strokeDashoffset = circumference;
            
            // Animate the progress
            setTimeout(() => {
                const offset = circumference - (progressValue / 100) * circumference;
                progressFill.style.strokeDashoffset = offset;
                progressFill.style.transition = 'stroke-dashoffset 1s ease-out';
            }, 300);
        }

        // Show Notification
        function showNotification(title, message, type = 'info') {
            const container = document.getElementById('notificationContainer');
            const notification = document.createElement('div');
            notification.className = 'notification';
            
            const icon = {
                'success': 'check-circle',
                'warning': 'exclamation-triangle',
                'error': 'times-circle',
                'info': 'info-circle'
            }[type] || 'info-circle';
            
            notification.innerHTML = `
                <div class="notification-icon">
                    <i class="fas fa-${icon}"></i>
                </div>
                <div style="flex: 1;">
                    <div style="font-weight: 600; margin-bottom: 5px; font-size: 14px;">${title}</div>
                    <div style="font-size: 12px; color: var(--gray);">${message}</div>
                </div>
                <button onclick="this.parentElement.remove()" style="background: none; border: none; color: var(--gray); cursor: pointer; font-size: 20px; line-height: 1;">×</button>
            `;
            
            container.appendChild(notification);
            
            // Auto remove after 5 seconds
            setTimeout(() => {
                if (notification.parentElement) {
                    notification.remove();
                }
            }, 5000);
        }

        // Open Photo Upload Modal
        function openPhotoUpload() {
            document.getElementById('photoModal').style.display = 'flex';
            // Close sidebar on mobile when opening modal
            if (window.innerWidth < 1024) {
                toggleSidebar();
            }
        }

        // Close Modal
        function closeModal() {
            document.getElementById('photoModal').style.display = 'none';
            document.getElementById('photoPreview').src = '';
            document.getElementById('photoPreview').style.display = 'none';
            document.getElementById('treePhoto').value = '';
        }

        // Trigger File Upload
        function triggerFileUpload() {
            document.getElementById('treePhoto').click();
        }

        // Preview Photo
        function previewPhoto(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const preview = document.getElementById('photoPreview');
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                };
                reader.readAsDataURL(file);
            }
        }

        // Upload Photo
        function uploadPhoto() {
            showNotification('Success!', 'Tree photo uploaded successfully with location tag!', 'success');
            
            // Simulate upload process
            setTimeout(() => {
                closeModal();
                
                // Update stats
                updateUserStats();
                
                // Show celebration
                celebrateAchievement();
            }, 1500);
        }

        // Plant New Tree
        function plantNewTree() {
            showNotification('Planting Wizard', 'Opening tree planting wizard...', 'info');
        }

        // View Community
        function viewCommunity() {
            showNotification('Community Hub', 'Connecting you with fellow planters...', 'info');
        }

        // View All Trees
        function viewAllTrees() {
            showNotification('All Trees', 'Loading all your planted trees...', 'info');
        }

        // Change Tab
        function changeTab(tabName) {
            const navItems = document.querySelectorAll('.nav-item');
            navItems.forEach(item => item.classList.remove('active'));
            event.currentTarget.classList.add('active');
            
            showNotification('Navigation', `Switched to ${tabName} tab`, 'info');
            
            // Close sidebar on mobile after clicking
            if (window.innerWidth < 1024) {
                toggleSidebar();
            }
        }

        // Update User Stats
        function updateUserStats() {
            const treeCount = document.querySelector('.stat-card:nth-child(1) .stat-value');
            const currentCount = parseInt(treeCount.textContent);
            treeCount.textContent = currentCount + 1;
            
            // Add animation
            treeCount.style.transform = 'scale(1.3)';
            setTimeout(() => {
                treeCount.style.transform = 'scale(1)';
            }, 300);
        }

        // Simulate Tree Growth
        function simulateTreeGrowth() {
            setInterval(() => {
                const trees = document.querySelectorAll('.tree-item');
                trees.forEach(tree => {
                    const growthSpan = tree.querySelector('span[style*="font-weight: 600;"]:last-child');
                    if (growthSpan) {
                        let currentGrowth = parseInt(growthSpan.textContent);
                        if (currentGrowth < 100 && Math.random() > 0.5) {
                            const increment = Math.floor(Math.random() * 2) + 1;
                            const newGrowth = Math.min(100, currentGrowth + increment);
                            
                            // Update growth percentage
                            growthSpan.textContent = newGrowth + '%';
                            
                            // Update health indicator
                            const healthIndicator = tree.querySelector('.tree-health');
                            const healthText = tree.querySelector('span[style*="color: var(--"]');
                            
                            if (newGrowth >= 70) {
                                growthSpan.style.color = 'var(--success)';
                                if (healthIndicator) healthIndicator.className = 'tree-health excellent';
                                if (healthText) {
                                    healthText.style.color = 'var(--success)';
                                    healthText.textContent = 'Excellent';
                                }
                            } else if (newGrowth >= 40) {
                                growthSpan.style.color = 'var(--warning)';
                                if (healthIndicator) healthIndicator.className = 'tree-health good';
                                if (healthText) {
                                    healthText.style.color = 'var(--warning)';
                                    healthText.textContent = 'Good';
                                }
                            }
                            
                            // Add growth animation
                            growthSpan.style.transform = 'scale(1.3)';
                            setTimeout(() => {
                                growthSpan.style.transform = 'scale(1)';
                            }, 300);
                        }
                    }
                });
            }, 8000); // Update every 8 seconds
        }

        // Celebrate Volunteer Status
        function celebrateVolunteer() {
            showNotification('Congratulations! 🎉', 'You are now a Certified Volunteer!', 'success');
            
            // Update volunteer progress
            const progressValue = document.getElementById('progressValue');
            const progressFill = document.getElementById('progressFill');
            
            progressValue.textContent = '100%';
            
            // Animate progress ring to 100%
            const radius = 90;
            const circumference = 2 * Math.PI * radius;
            progressFill.style.strokeDashoffset = circumference - (100 / 100) * circumference;
            
            // Add confetti effect
            createConfetti();
        }

        // Celebrate Achievement
        function celebrateAchievement() {
            // Add floating particles
            for(let i = 0; i < 30; i++) {
                createParticle();
            }
        }

        // Create Confetti
        function createConfetti() {
            const colors = ['#10B981', '#3B82F6', '#F59E0B', '#EC4899'];
            
            for(let i = 0; i < 50; i++) {
                const confetti = document.createElement('div');
                confetti.innerHTML = '🎉';
                confetti.style.position = 'fixed';
                confetti.style.fontSize = `${Math.random() * 15 + 10}px`;
                confetti.style.left = Math.random() * 100 + 'vw';
                confetti.style.top = '-50px';
                confetti.style.zIndex = '9999';
                confetti.style.opacity = '0.8';
                confetti.style.pointerEvents = 'none';
                confetti.style.animation = `fall ${Math.random() * 2 + 1}s linear forwards`;
                confetti.style.animationDelay = Math.random() * 0.5 + 's';
                confetti.style.color = colors[Math.floor(Math.random() * colors.length)];
                document.body.appendChild(confetti);
                
                // Remove after animation
                setTimeout(() => confetti.remove(), 3000);
            }
        }

        // Create Particle
        function createParticle() {
            const particle = document.createElement('div');
            particle.innerHTML = '✨';
            particle.style.position = 'fixed';
            particle.style.fontSize = '16px';
            particle.style.left = Math.random() * 100 + 'vw';
            particle.style.top = Math.random() * 100 + 'vh';
            particle.style.zIndex = '9999';
            particle.style.opacity = '0.7';
            particle.style.pointerEvents = 'none';
            particle.style.animation = `float ${Math.random() * 1.5 + 0.5}s ease-in-out infinite`;
            document.body.appendChild(particle);
            
            // Remove after some time
            setTimeout(() => particle.remove(), 2000);
        }

        // Handle clicks outside modal
        document.addEventListener('click', function(event) {
            if (event.target.classList.contains('modal-overlay')) {
                closeModal();
            }
        });

        // Handle keyboard shortcuts
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                closeModal();
            }
            if (event.key === 'p' && event.ctrlKey) {
                event.preventDefault();
                openPhotoUpload();
            }
        });

        // Handle window resize
        let resizeTimeout;
        window.addEventListener('resize', function() {
            clearTimeout(resizeTimeout);
            resizeTimeout = setTimeout(function() {
                // Reinitialize tree map on resize
                initializeTreeMap();
                
                // Handle chart resizing
                const chartCanvas = document.getElementById('growthChart');
                if (chartCanvas) {
                    chartCanvas.style.width = '100%';
                }
            }, 250);
        });

        // Handle touch gestures for mobile
        let touchStartX = 0;
        let touchEndX = 0;

        document.addEventListener('touchstart', function(event) {
            touchStartX = event.changedTouches[0].screenX;
        }, false);

        document.addEventListener('touchend', function(event) {
            touchEndX = event.changedTouches[0].screenX;
            handleSwipe();
        }, false);

        function handleSwipe() {
            const swipeThreshold = 50;
            
            if (touchEndX < touchStartX - swipeThreshold) {
                // Swipe left - close sidebar if open
                if (window.innerWidth < 1024) {
                    document.querySelector('.sidebar').classList.remove('active');
                    document.querySelector('.mobile-overlay').classList.remove('active');
                }
            }
            
            if (touchEndX > touchStartX + swipeThreshold) {
                // Swipe right - open sidebar if on mobile
                if (window.innerWidth < 1024) {
                    document.querySelector('.sidebar').classList.add('active');
                    document.querySelector('.mobile-overlay').classList.add('active');
                }
            }
        }

        // Add animation to stats cards on scroll
        function animateOnScroll() {
            const statsCards = document.querySelectorAll('.stat-card');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach((entry, index) => {
                    if (entry.isIntersecting) {
                        setTimeout(() => {
                            entry.target.style.opacity = '1';
                            entry.target.style.transform = 'translateY(0)';
                        }, index * 100);
                    }
                });
            }, { threshold: 0.1 });

            statsCards.forEach(card => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(20px)';
                card.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                observer.observe(card);
            });
        }

        // Initialize animations on scroll
        setTimeout(() => {
            animateOnScroll();
        }, 500);
    