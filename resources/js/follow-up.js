/* ===============================
   ACTIVITY NAV
================================ */
.act-nav-pills {
    gap: 5px;
}

.act-nav-pills .nav-link {
    font-size: 12px;
    color: #64748b;
    padding: 7px 11px;
    border-radius: 5px;
    display: flex;
    align-items: center;
}

.act-nav-pills .nav-link:hover {
    background: #f1f5f9;
}

.act-nav-pills .nav-link.active {
    background: #6366f1;
    color: #fff;
    box-shadow: 0 3px 8px rgba(99, 102, 241, 0.25);
}

/* ===============================
   DAY LABEL
================================ */
.act-day-label {
    display: inline-flex;
    align-items: center;
    font-size: 11px;
    font-weight: 600;
    color: #94a3b8;
    text-transform: uppercase;
    margin-bottom: 14px;
}

/* ===============================
   TIMELINE
================================ */
.act-timeline {
    position: relative;
}

.act-timeline-item {
    position: relative;
    display: flex;
    gap: 12px;
    padding-bottom: 14px;
}

.act-timeline-item:not(:last-child)::before {
    content: "";
    position: absolute;
    left: 11px;
    top: 25px;
    bottom: -2px;
    width: 1px;
    background: #e2e8f0;
}

.act-timeline-dot {
    width: 23px;
    height: 23px;
    min-width: 23px;
    border-radius: 50%;
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    z-index: 2;
}

.act-timeline-content {
    flex: 1;
    min-width: 0;
}

.act-timeline-content p {
    font-size: 12px;
    line-height: 1.5;
}

.act-timeline-content small {
    font-size: 10px;
}

/* ===============================
   AVATAR
================================ */
.avatar {
    display: flex;
    align-items: center;
    justify-content: center;
}

.avatar-xs {
    width: 20px;
    height: 20px;
    min-width: 20px;
}

.avatar-sm {
    width: 28px;
    height: 28px;
    min-width: 28px;
}

.avatar-placeholder {
    width: 100%;
    height: 100%;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-size: 8px;
    font-weight: 600;
}

/* ===============================
   COMMENT
================================ */
.act-comment-preview {
    margin-left: 32px;
    margin-top: 3px;
    color: #64748b;
    font-size: 11px;
    font-style: italic;
}

/* ===============================
   FILE TAG
================================ */
.act-file-list {
    display: flex;
    gap: 6px;
    margin-left: 32px;
    margin-top: 5px;
}

.act-file-tag {
    display: inline-flex;
    align-items: center;
    gap: 4px;
    background: #f1f5f9;
    color: #64748b;
    padding: 3px 6px;
    border-radius: 3px;
    font-size: 9px;
}

/* ===============================
   SOFT BADGES
================================ */
.bg-soft-danger {
    background: rgba(239, 68, 68, 0.1);
}

.bg-soft-success {
    background: rgba(16, 185, 129, 0.1);
}

.bg-soft-warning {
    background: rgba(245, 158, 11, 0.1);
}

.bg-soft-primary {
    background: rgba(99, 102, 241, 0.1);
}

/* ===============================
   ACTIVE MEMBERS
================================ */
.act-member-item {
    display: flex;
    align-items: center;
    padding: 10px 12px;
    border-bottom: 1px solid #f1f5f9;
}

.act-member-item:last-child {
    border-bottom: none;
}

.act-member-item h6 {
    font-size: 11px;
}

.act-member-item small {
    font-size: 9px;
}

.act-online-dot {
    width: 7px;
    height: 7px;
    background: #22c55e;
    border: 2px solid #fff;
    border-radius: 50%;
    position: absolute;
    right: -1px;
    bottom: 0;
}

/* ===============================
   ACTIVE PROJECTS
================================ */
.act-project-item {
    display: flex;
    gap: 9px;
    padding: 12px;
    border-bottom: 1px solid #f1f5f9;
}

.act-project-item:last-child {
    border-bottom: none;
}

.act-project-color {
    width: 3px;
    border-radius: 5px;
}

.act-project-item h6 {
    font-size: 11px;
}

.act-project-progress {
    height: 3px;
    border-radius: 10px;
    background: #e9ecef;
}

.act-project-progress .progress-bar {
    border-radius: 10px;
}

.act-project-item small {
    font-size: 9px;
}