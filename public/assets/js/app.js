/**
 * Droom - Premium Admin Dashboard Template
 * Main Application JavaScript
 */
(function() {
    'use strict';

    // Droom global namespace
    window.Droom = window.Droom || {};

    // Color palette
    Droom.colors = {
        primary: '#6366F1',
        secondary: '#8B5CF6',
        success: '#22C55E',
        warning: '#F59E0B',
        danger: '#EF4444',
        info: '#06B6D4',
        dark: '#1E293B',
        light: '#F1F5F9',
        muted: '#94A3B8'
    };

    // ===========================
    // Preloader
    // ===========================
    window.addEventListener('load', function() {
        var preloader = document.getElementById('preloader');
        if (preloader) {
            preloader.style.opacity = '0';
            setTimeout(function() {
                preloader.style.display = 'none';
            }, 300);
        }
    });

    // ===========================
    // Query Parameter Overrides
    // ===========================
    // Supported parameters:
    //   ?dark=true|false       — Enable/disable dark mode
    //   ?collapsed=true|false  — Collapse/expand sidebar
    //   ?rtl=true|false        — Enable/disable RTL layout
    //
    // Examples:
    //   index.html?dark=true
    //   index.html?collapsed=true
    //   index.html?dark=true&collapsed=true
    //   dashboard-crm.html?dark=false&collapsed=false
    //
    (function applyQueryParams() {
        var params = new URLSearchParams(window.location.search);

        if (params.has('dark')) {
            var darkVal = params.get('dark') === 'true';
            if (darkVal) {
                document.body.classList.add('dark-mode');
            } else {
                document.body.classList.remove('dark-mode');
            }
            localStorage.setItem('dark-mode', darkVal);
        }

        if (params.has('collapsed')) {
            var collapsedVal = params.get('collapsed') === 'true';
            if (collapsedVal && window.innerWidth >= 992) {
                document.body.classList.add('sidebar-collapsed');
            } else {
                document.body.classList.remove('sidebar-collapsed');
            }
            localStorage.setItem('sidebar-collapsed', collapsedVal);
        }

        if (params.has('rtl')) {
            if (params.get('rtl') === 'true') {
                document.documentElement.setAttribute('dir', 'rtl');
                document.body.classList.add('rtl-mode');
            } else {
                document.documentElement.removeAttribute('dir');
                document.body.classList.remove('rtl-mode');
            }
        }
    })();

    // ===========================
    // DOM Content Loaded
    // ===========================
    document.addEventListener('DOMContentLoaded', function() {
        initSidebar();
        initHeader();
        initFeatherIcons();
        initTooltips();
        initPopovers();
        initCounters();
        initProgressBars();
        initBackToTop();
        initDarkMode();
        initFullscreen();
        initSearchToggle();
        initFormValidation();
        initPasswordToggle();
        initSelectAll();
        initTodoList();
        initNotifications();
        initPrintPage();
        initFileUpload();
        initFormWizard();
        initToastSystem();
    });

    // ===========================
    // Feather Icons
    // ===========================
    function initFeatherIcons() {
        if (typeof feather !== 'undefined') {
            feather.replace({ width: 18, height: 18 });
        }
    }

    // ===========================
    // Sidebar
    // ===========================
    function initSidebar() {
        var sidebar = document.getElementById('sidebar');
        var sidebarToggle = document.getElementById('sidebarToggle');
        var sidebarOverlay = document.querySelector('.sidebar-overlay');
       
        // Toggle sidebar
        if (sidebarToggle) {
            sidebarToggle.addEventListener('click', function(e) {
                e.preventDefault();

                if (window.innerWidth < 992) {
                    // Mobile: open full sidebar, don't collapse
                    document.body.classList.toggle('sidebar-mobile-open');
                } else {
                    // Desktop: toggle collapsed state
                    document.body.classList.toggle('sidebar-collapsed');
                    localStorage.setItem('sidebar-collapsed', document.body.classList.contains('sidebar-collapsed'));
                }
            });
        }

        // Close sidebar on overlay click
        if (sidebarOverlay) {
            sidebarOverlay.addEventListener('click', function() {
                document.body.classList.remove('sidebar-mobile-open');
            });
        }

        // Restore sidebar state
        if (localStorage.getItem('sidebar-collapsed') === 'true' && window.innerWidth >= 992) {
            document.body.classList.add('sidebar-collapsed');
        }

        // Submenu toggle
        var submenuToggles = document.querySelectorAll('.has-submenu > .menu-link');
        submenuToggles.forEach(function(toggle) {
            toggle.addEventListener('click', function(e) {
                e.preventDefault();
                var parent = this.parentElement;
                var submenu = parent.querySelector('.submenu');

                // Close other submenus (accordion behavior)
                var siblings = parent.parentElement.querySelectorAll('.has-submenu');
                siblings.forEach(function(sibling) {
                    if (sibling !== parent) {
                        sibling.classList.remove('active');
                        var siblingSubmenu = sibling.querySelector('.submenu');
                        if (siblingSubmenu) {
                            siblingSubmenu.style.maxHeight = null;
                            siblingSubmenu.classList.remove('show');
                        }
                    }
                });

                // Toggle current submenu
                parent.classList.toggle('active');
                if (submenu) {
                    if (submenu.classList.contains('show')) {
                        submenu.style.maxHeight = null;
                        submenu.classList.remove('show');
                    } else {
                        submenu.classList.add('show');
                        submenu.style.maxHeight = submenu.scrollHeight + 'px';
                    }
                }
            });
        });

        // Set active menu based on current page
        var currentPage = window.location.pathname.split('https://demo.mycreativetemplates.com/').pop() || 'index.html';
        var menuLinks = document.querySelectorAll('.sidebar-menu a');
        menuLinks.forEach(function(link) {
            var href = link.getAttribute('href');
            if (href === currentPage) {
                link.classList.add('active');
                // Open parent submenu
                var parentSubmenu = link.closest('.submenu');
                if (parentSubmenu) {
                    parentSubmenu.classList.add('show');
                    parentSubmenu.style.maxHeight = parentSubmenu.scrollHeight + 'px';
                    var parentItem = parentSubmenu.closest('.has-submenu');
                    if (parentItem) {
                        parentItem.classList.add('active');
                    }
                }
                // Set parent menu-item as active
                var parentLi = link.closest('.menu-item');
                if (parentLi) {
                    parentLi.classList.add('active');
                    // Trigger animation reflow for neon glow effect
                    var activeLink = parentLi.querySelector('.menu-link');
                    if (activeLink) {
                        void activeLink.offsetHeight;
                    }
                }
            }
        });

        // Sidebar hover expand for collapsed state
        if (sidebar) {
            sidebar.addEventListener('mouseenter', function() {
                if (document.body.classList.contains('sidebar-collapsed') && window.innerWidth >= 992) {
                    document.body.classList.add('sidebar-hover');
                }
            });
            sidebar.addEventListener('mouseleave', function() {
                document.body.classList.remove('sidebar-hover');
            });
        }

        // Window resize handler
        var resizeTimer;
        window.addEventListener('resize', function() {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(function() {
                if (window.innerWidth >= 992) {
                    document.body.classList.remove('sidebar-mobile-open');
                }
            }, 250);
        });
    }

    // ===========================
    // Header / Topbar
    // ===========================
    function initHeader() {
        // Close notification dropdown on outside click
        document.addEventListener('click', function(e) {
            var notifDropdown = document.querySelector('.notification-dropdown');
            if (notifDropdown && !e.target.closest('.topbar-dropdown')) {
                // Bootstrap handles this
            }
        });
    }

    // ===========================
    // Dark Mode
    // ===========================
    function initDarkMode() {
        var darkModeToggle = document.getElementById('darkModeToggle');

        // Restore dark mode state
        if (localStorage.getItem('dark-mode') === 'true') {
            document.body.classList.add('dark-mode');
        }

        if (darkModeToggle) {
            darkModeToggle.addEventListener('click', function(e) {
                e.preventDefault();
                document.body.classList.toggle('dark-mode');
                localStorage.setItem('dark-mode', document.body.classList.contains('dark-mode'));

                // Re-render feather icons
                initFeatherIcons();

                // Update ApexCharts theme
                if (typeof Droom !== 'undefined' && Droom.updateChartsTheme) {
                    Droom.updateChartsTheme();
                }
            });
        }
    }

    // ===========================
    // Fullscreen
    // ===========================
    function initFullscreen() {
        var fullscreenToggle = document.getElementById('fullscreenToggle');
        if (fullscreenToggle) {
            fullscreenToggle.addEventListener('click', function(e) {
                e.preventDefault();
                if (!document.fullscreenElement) {
                    document.documentElement.requestFullscreen().catch(function() {});
                } else {
                    document.exitFullscreen().catch(function() {});
                }
            });
        }
    }

    // ===========================
    // Search Toggle (Mobile)
    // ===========================
    function initSearchToggle() {
        var searchToggle = document.getElementById('searchToggleMobile');
        var searchBox = document.querySelector('.search-box');
        if (searchToggle && searchBox) {
            searchToggle.addEventListener('click', function(e) {
                e.preventDefault();
                searchBox.classList.toggle('show-mobile');
            });
        }
    }

    // ===========================
    // Tooltips
    // ===========================
    function initTooltips() {
        var tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
        tooltipTriggerList.forEach(function(el) {
            new bootstrap.Tooltip(el);
        });
    }

    // ===========================
    // Popovers
    // ===========================
    function initPopovers() {
        var popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]');
        popoverTriggerList.forEach(function(el) {
            new bootstrap.Popover(el);
        });
    }

    // ===========================
    // Counter Animation
    // ===========================
    function initCounters() {
        var counters = document.querySelectorAll('.counter');
        if (counters.length === 0) return;

        var observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    animateCounter(entry.target);
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        counters.forEach(function(counter) {
            observer.observe(counter);
        });
    }

    function animateCounter(element) {
        var target = parseInt(element.getAttribute('data-target')) || 0;
        var current = 0;
        var increment = target / 60;
        var prefix = element.textContent.match(/^[^0-9]*/)[0] || '';
        var suffix = element.textContent.match(/[^0-9]*$/)[0] || '';

        var timer = setInterval(function() {
            current += increment;
            if (current >= target) {
                current = target;
                clearInterval(timer);
            }
            element.textContent = prefix + Math.floor(current).toLocaleString() + suffix;
        }, 16);
    }

    // ===========================
    // Progress Bars
    // ===========================
    function initProgressBars() {
        var progressBars = document.querySelectorAll('.progress-bar[data-width]');
        if (progressBars.length === 0) return;

        var observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    var width = entry.target.getAttribute('data-width');
                    entry.target.style.width = width + '%';
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.3 });

        progressBars.forEach(function(bar) {
            bar.style.width = '0%';
            bar.style.transition = 'width 1.5s ease-in-out';
            observer.observe(bar);
        });
    }

    // ===========================
    // Back to Top
    // ===========================
    function initBackToTop() {
        var backToTop = document.getElementById('backToTop');
        if (!backToTop) return;

        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                backToTop.classList.add('show');
            } else {
                backToTop.classList.remove('show');
            }
        });

        backToTop.addEventListener('click', function(e) {
            e.preventDefault();
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    // ===========================
    // Notifications
    // ===========================
    function initNotifications() {
        var markAllRead = document.querySelector('.notification-dropdown .dropdown-header a');
        if (markAllRead) {
            markAllRead.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                var unreadItems = document.querySelectorAll('.notification-item.unread');
                unreadItems.forEach(function(item) {
                    item.classList.remove('unread');
                });
                var badge = document.querySelector('.notification-badge');
                if (badge) badge.style.display = 'none';
            });
        }
    }

    // ===========================
    // Form Validation
    // ===========================
    function initFormValidation() {
        var forms = document.querySelectorAll('.needs-validation');
        forms.forEach(function(form) {
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            });
        });
    }

    // ===========================
    // Password Toggle
    // ===========================
    function initPasswordToggle() {
        var toggles = document.querySelectorAll('.password-toggle');
        toggles.forEach(function(toggle) {
            toggle.addEventListener('click', function() {
                var input = this.closest('.input-group').querySelector('input');
                if (input) {
                    var type = input.getAttribute('type') === 'password' ? 'text' : 'password';
                    input.setAttribute('type', type);
                    var icon = this.querySelector('[data-feather]');
                    if (icon) {
                        var newIcon = type === 'password' ? 'eye' : 'eye-off';
                        icon.setAttribute('data-feather', newIcon);
                        initFeatherIcons();
                    }
                }
            });
        });
    }

    // ===========================
    // Select All Checkbox
    // ===========================
    function initSelectAll() {
        var selectAll = document.getElementById('selectAll');
        if (selectAll) {
            selectAll.addEventListener('change', function() {
                var checkboxes = this.closest('table').querySelectorAll('tbody .form-check-input');
                checkboxes.forEach(function(cb) {
                    cb.checked = selectAll.checked;
                });
            });
        }
    }

    // ===========================
    // Todo List
    // ===========================
    function initTodoList() {
        var todoInput = document.getElementById('todoInput');
        var todoAddBtn = document.getElementById('todoAddBtn');
        var todoList = document.getElementById('todoList');

        if (!todoInput || !todoList) return;

        // Add new todo
        function addTodo() {
            var text = todoInput.value.trim();
            if (!text) return;

            var li = document.createElement('li');
            li.className = 'todo-item';
            li.innerHTML = '<label class="todo-label"><input type="checkbox" class="form-check-input todo-check"> <span class="todo-text">' + escapeHtml(text) + '</span></label><button class="btn btn-sm btn-icon todo-delete"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg></button>';
            todoList.appendChild(li);
            todoInput.value = '';
        }

        if (todoAddBtn) {
            todoAddBtn.addEventListener('click', addTodo);
        }
        todoInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') { e.preventDefault(); addTodo(); }
        });

        // Delegate todo events
        todoList.addEventListener('click', function(e) {
            var deleteBtn = e.target.closest('.todo-delete');
            if (deleteBtn) {
                deleteBtn.closest('.todo-item').remove();
                return;
            }

            var checkbox = e.target.closest('.todo-check');
            if (checkbox) {
                checkbox.closest('.todo-item').classList.toggle('completed', checkbox.checked);
            }
        });

        // Todo filter
        var todoFilters = document.querySelectorAll('[data-todo-filter]');
        todoFilters.forEach(function(filter) {
            filter.addEventListener('click', function(e) {
                e.preventDefault();
                todoFilters.forEach(function(f) { f.classList.remove('active'); });
                this.classList.add('active');
                var filterVal = this.getAttribute('data-todo-filter');
                var items = todoList.querySelectorAll('.todo-item');
                items.forEach(function(item) {
                    switch (filterVal) {
                        case 'active':
                            item.style.display = item.classList.contains('completed') ? 'none' : '';
                            break;
                        case 'completed':
                            item.style.display = item.classList.contains('completed') ? '' : 'none';
                            break;
                        default:
                            item.style.display = '';
                    }
                });
            });
        });
    }

    // ===========================
    // Chat Functionality
    // ===========================
    Droom.initChat = function() {
        var chatInput = document.getElementById('chatInput');
        var chatSendBtn = document.getElementById('chatSendBtn');
        var chatMessages = document.getElementById('chatMessages');

        if (!chatInput || !chatMessages) return;

        function sendMessage() {
            var text = chatInput.value.trim();
            if (!text) return;

            var now = new Date();
            var time = now.getHours().toString().padStart(2, '0') + ':' + now.getMinutes().toString().padStart(2, '0');

            var msgDiv = document.createElement('div');
            msgDiv.className = 'message-item message-sent';
            msgDiv.innerHTML = '<div class="message-bubble"><p class="mb-1">' + escapeHtml(text) + '</p><span class="message-time">' + time + '</span></div>';
            chatMessages.appendChild(msgDiv);
            chatInput.value = '';
            chatMessages.scrollTop = chatMessages.scrollHeight;

            // Simulate reply
            setTimeout(function() {
                var replies = ['That sounds great!', 'I\'ll look into it.', 'Thanks for the update!', 'Got it, will do!', 'Let me check and get back to you.'];
                var reply = replies[Math.floor(Math.random() * replies.length)];
                var replyDiv = document.createElement('div');
                replyDiv.className = 'message-item message-received';
                replyDiv.innerHTML = '<div class="message-avatar"><div class="avatar avatar-sm"><div class="avatar-placeholder bg-primary">AJ</div></div></div><div class="message-bubble"><p class="mb-1">' + reply + '</p><span class="message-time">' + time + '</span></div>';
                chatMessages.appendChild(replyDiv);
                chatMessages.scrollTop = chatMessages.scrollHeight;
            }, 1500);
        }

        if (chatSendBtn) {
            chatSendBtn.addEventListener('click', sendMessage);
        }
        chatInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') { e.preventDefault(); sendMessage(); }
        });

        // Contact list click
        var contacts = document.querySelectorAll('.chat-contact-item');
        contacts.forEach(function(contact) {
            contact.addEventListener('click', function() {
                contacts.forEach(function(c) { c.classList.remove('active'); });
                this.classList.add('active');
            });
        });
    };

    // ===========================
    // Email Functionality
    // ===========================
    Droom.initEmail = function() {
        // Star toggle
        var stars = document.querySelectorAll('.email-star');
        stars.forEach(function(star) {
            star.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                this.classList.toggle('starred');
            });
        });

        // Select all
        var selectAll = document.getElementById('emailSelectAll');
        if (selectAll) {
            selectAll.addEventListener('change', function() {
                var checkboxes = document.querySelectorAll('.email-item .form-check-input');
                checkboxes.forEach(function(cb) {
                    cb.checked = selectAll.checked;
                });
            });
        }

        // Delete selected
        var deleteBtn = document.getElementById('emailDeleteBtn');
        if (deleteBtn) {
            deleteBtn.addEventListener('click', function() {
                var checked = document.querySelectorAll('.email-item .form-check-input:checked');
                checked.forEach(function(cb) {
                    cb.closest('.email-item').remove();
                });
            });
        }
    };

    // ===========================
    // Kanban Board
    // ===========================
    Droom.initKanban = function() {
        if (typeof Sortable === 'undefined') return;

        var kanbanColumns = document.querySelectorAll('.kanban-items');
        kanbanColumns.forEach(function(column) {
            new Sortable(column, {
                group: 'kanban',
                animation: 200,
                ghostClass: 'kanban-ghost',
                dragClass: 'kanban-drag',
                handle: '.kanban-card',
                onEnd: function() {
                    // Update counts
                    document.querySelectorAll('.kanban-column').forEach(function(col) {
                        var count = col.querySelectorAll('.kanban-card').length;
                        var badge = col.querySelector('.kanban-count');
                        if (badge) badge.textContent = count;
                    });
                }
            });
        });
    };

    // ===========================
    // File Upload
    // ===========================
    function initFileUpload() {
        var dropZones = document.querySelectorAll('.file-drop-zone');
        dropZones.forEach(function(zone) {
            zone.addEventListener('dragover', function(e) {
                e.preventDefault();
                this.classList.add('dragover');
            });
            zone.addEventListener('dragleave', function() {
                this.classList.remove('dragover');
            });
            zone.addEventListener('drop', function(e) {
                e.preventDefault();
                this.classList.remove('dragover');
                var files = e.dataTransfer.files;
                handleFiles(files, this);
            });

            var fileInput = zone.querySelector('input[type="file"]');
            if (fileInput) {
                fileInput.addEventListener('change', function() {
                    handleFiles(this.files, zone);
                });
            }
        });
    }

    function handleFiles(files, zone) {
        var preview = zone.querySelector('.file-preview') || zone.parentElement.querySelector('.file-preview');
        if (!preview) return;

        Array.from(files).forEach(function(file) {
            var item = document.createElement('div');
            item.className = 'file-preview-item d-flex align-items-center p-2 border rounded mb-2';
            item.innerHTML = '<div class="me-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg></div><div class="flex-grow-1"><p class="mb-0 fw-semibold">' + escapeHtml(file.name) + '</p><small class="text-muted">' + formatFileSize(file.size) + '</small></div><button class="btn btn-sm btn-icon text-danger file-remove">&times;</button>';
            preview.appendChild(item);

            item.querySelector('.file-remove').addEventListener('click', function() {
                item.remove();
            });
        });
    }

    // ===========================
    // Form Wizard
    // ===========================
    function initFormWizard() {
        var wizards = document.querySelectorAll('.form-wizard');
        wizards.forEach(function(wizard) {
            var steps = wizard.querySelectorAll('.wizard-step');
            var panels = wizard.querySelectorAll('.wizard-panel');
            var prevBtn = wizard.querySelector('.wizard-prev');
            var nextBtn = wizard.querySelector('.wizard-next');
            var submitBtn = wizard.querySelector('.wizard-submit');
            var currentStep = 0;

            function showStep(index) {
                steps.forEach(function(step, i) {
                    step.classList.toggle('active', i === index);
                    step.classList.toggle('completed', i < index);
                });
                panels.forEach(function(panel, i) {
                    panel.classList.toggle('active', i === index);
                });
                if (prevBtn) prevBtn.style.display = index === 0 ? 'none' : '';
                if (nextBtn) nextBtn.style.display = index === steps.length - 1 ? 'none' : '';
                if (submitBtn) submitBtn.style.display = index === steps.length - 1 ? '' : 'none';
                currentStep = index;
            }

            if (nextBtn) {
                nextBtn.addEventListener('click', function() {
                    if (currentStep < steps.length - 1) showStep(currentStep + 1);
                });
            }
            if (prevBtn) {
                prevBtn.addEventListener('click', function() {
                    if (currentStep > 0) showStep(currentStep - 1);
                });
            }

            showStep(0);
        });
    }

    // ===========================
    // Toast System
    // ===========================
    function initToastSystem() {
        // Auto-init Bootstrap toasts
        var toastElList = document.querySelectorAll('.toast');
        toastElList.forEach(function(el) {
            new bootstrap.Toast(el);
        });
    }

    Droom.showToast = function(message, type) {
        type = type || 'primary';
        var container = document.querySelector('.toast-container');
        if (!container) {
            container = document.createElement('div');
            container.className = 'toast-container position-fixed top-0 end-0 p-3';
            container.style.zIndex = '9999';
            document.body.appendChild(container);
        }

        var toastId = 'toast-' + Date.now();
        var iconMap = {
            success: '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>',
            danger: '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg>',
            warning: '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>',
            info: '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12.01" y2="8"/></svg>',
            primary: '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12.01" y2="8"/></svg>'
        };

        var toastHtml = '<div id="' + toastId + '" class="toast align-items-center border-0 bg-' + type + ' text-white" role="alert" data-bs-autohide="true" data-bs-delay="4000"><div class="d-flex"><div class="toast-body d-flex align-items-center gap-2">' + (iconMap[type] || '') + ' ' + escapeHtml(message) + '</div><button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button></div></div>';

        container.insertAdjacentHTML('beforeend', toastHtml);
        var toastEl = document.getElementById(toastId);
        var toast = new bootstrap.Toast(toastEl);
        toast.show();

        toastEl.addEventListener('hidden.bs.toast', function() {
            toastEl.remove();
        });
    };

    // ===========================
    // Print Page
    // ===========================
    function initPrintPage() {
        var printBtns = document.querySelectorAll('[data-action="print"]');
        printBtns.forEach(function(btn) {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                window.print();
            });
        });
    }

    // ===========================
    // DataTable Helper
    // ===========================
    Droom.initDataTable = function(selector, options) {
        if (typeof $ === 'undefined' || typeof $.fn.DataTable === 'undefined') return null;

        var defaults = {
            responsive: true,
            pageLength: 10,
            lengthMenu: [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]],
            language: {
                search: '',
                searchPlaceholder: 'Search...',
                lengthMenu: 'Show _MENU_ entries',
                info: 'Showing _START_ to _END_ of _TOTAL_ entries',
                paginate: { previous: '&laquo;', next: '&raquo;' }
            },
            dom: '<"row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>><"row"<"col-sm-12"tr>><"row"<"col-sm-12 col-md-5"i><"col-sm-12 col-md-7"p>>'
        };

        var mergedOptions = Object.assign({}, defaults, options || {});
        return $(selector).DataTable(mergedOptions);
    };

    // ===========================
    // ApexChart Helper
    // ===========================
    Droom._charts = [];

    Droom.isDarkMode = function() {
        return document.body.classList.contains('dark-mode');
    };

    Droom.getChartDefaults = function() {
        var isDark = Droom.isDarkMode();
        return {
            foreColor: isDark ? '#94A3B8' : '#373d3f',
            gridColor: isDark ? '#1E293B' : '#f1f1f1',
            tooltipTheme: isDark ? 'dark' : 'light'
        };
    };

    Droom.createChart = function(selector, options) {
        if (typeof ApexCharts === 'undefined') return null;

        var el = document.querySelector(selector);
        if (!el) return null;

        var defaults = Droom.getChartDefaults();

        // Apply default font and dark mode colors
        options.chart = options.chart || {};
        options.chart.fontFamily = options.chart.fontFamily || 'Inter, sans-serif';
        options.chart.foreColor = options.chart.foreColor || defaults.foreColor;

        // Apply grid colors
        if (options.grid) {
            options.grid.borderColor = options.grid.borderColor || defaults.gridColor;
        }

        // Apply tooltip theme
        options.tooltip = options.tooltip || {};
        options.tooltip.theme = options.tooltip.theme || defaults.tooltipTheme;

        var chart = new ApexCharts(el, options);
        chart.render();
        Droom._charts.push(chart);
        return chart;
    };

    Droom.updateChartsTheme = function() {
        if (typeof ApexCharts === 'undefined') return;
        var defaults = Droom.getChartDefaults();
        Droom._charts.forEach(function(chart) {
            if (chart && typeof chart.updateOptions === 'function') {
                chart.updateOptions({
                    chart: { foreColor: defaults.foreColor },
                    grid: { borderColor: defaults.gridColor },
                    tooltip: { theme: defaults.tooltipTheme }
                }, false, false);
            }
        });
    };

    // ===========================
    // Countdown Timer
    // ===========================
    Droom.initCountdown = function(targetDate, selector) {
        var el = document.querySelector(selector);
        if (!el) return;

        function update() {
            var now = new Date().getTime();
            var distance = new Date(targetDate).getTime() - now;

            if (distance < 0) {
                el.innerHTML = '<span class="text-success fw-bold">Time is up!</span>';
                return;
            }

            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            var daysEl = el.querySelector('.countdown-days');
            var hoursEl = el.querySelector('.countdown-hours');
            var minutesEl = el.querySelector('.countdown-minutes');
            var secondsEl = el.querySelector('.countdown-seconds');

            if (daysEl) daysEl.textContent = days.toString().padStart(2, '0');
            if (hoursEl) hoursEl.textContent = hours.toString().padStart(2, '0');
            if (minutesEl) minutesEl.textContent = minutes.toString().padStart(2, '0');
            if (secondsEl) secondsEl.textContent = seconds.toString().padStart(2, '0');
        }

        update();
        setInterval(update, 1000);
    };

    // ===========================
    // Star Rating
    // ===========================
    Droom.initRating = function() {
        var ratingContainers = document.querySelectorAll('.star-rating:not(.readonly)');
        ratingContainers.forEach(function(container) {
            var stars = container.querySelectorAll('.star');
            var input = container.querySelector('input[type="hidden"]');

            stars.forEach(function(star, index) {
                star.addEventListener('click', function() {
                    var value = index + 1;
                    if (input) input.value = value;
                    stars.forEach(function(s, i) {
                        s.classList.toggle('active', i < value);
                    });
                });

                star.addEventListener('mouseenter', function() {
                    stars.forEach(function(s, i) {
                        s.classList.toggle('hover', i <= index);
                    });
                });

                star.addEventListener('mouseleave', function() {
                    stars.forEach(function(s) {
                        s.classList.remove('hover');
                    });
                });
            });
        });
    };

    // ===========================
    // Treeview
    // ===========================
    Droom.initTreeview = function() {
        var togglers = document.querySelectorAll('.treeview-toggle');
        togglers.forEach(function(toggler) {
            toggler.addEventListener('click', function(e) {
                e.preventDefault();
                var parent = this.parentElement;
                parent.classList.toggle('open');
                var children = parent.querySelector('.treeview-children');
                if (children) {
                    if (children.style.maxHeight) {
                        children.style.maxHeight = null;
                    } else {
                        children.style.maxHeight = children.scrollHeight + 'px';
                    }
                }
            });
        });
    };

    // ===========================
    // Clipboard Copy
    // ===========================
    Droom.copyToClipboard = function(text, btn) {
        navigator.clipboard.writeText(text).then(function() {
            if (btn) {
                var originalText = btn.textContent;
                btn.textContent = 'Copied!';
                btn.classList.add('btn-success');
                setTimeout(function() {
                    btn.textContent = originalText;
                    btn.classList.remove('btn-success');
                }, 2000);
            }
        });
    };

    // ===========================
    // Utility Functions
    // ===========================
    function escapeHtml(text) {
        var div = document.createElement('div');
        div.appendChild(document.createTextNode(text));
        return div.innerHTML;
    }

    function formatFileSize(bytes) {
        if (bytes === 0) return '0 Bytes';
        var k = 1024;
        var sizes = ['Bytes', 'KB', 'MB', 'GB'];
        var i = Math.floor(Math.log(bytes) / Math.log(k));
        return parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + ' ' + sizes[i];
    }

    // Expose utilities
    Droom.escapeHtml = escapeHtml;
    Droom.formatFileSize = formatFileSize;

    // ===========================
    // Auto-init page modules
    // ===========================
    document.addEventListener('DOMContentLoaded', function() {
        if (document.getElementById('chatInput')) Droom.initChat();
        if (document.querySelector('.email-star, .email-item')) Droom.initEmail();
        if (document.querySelector('.kanban-items')) Droom.initKanban();
    });

})();
