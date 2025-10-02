<div class="infinite-marquee">
    <div class="marquee-content" aria-hidden="true">
        <!-- Original Content -->
        <span class="marquee-item">
            <img src="https://hod.gurenosay.org/wp-content/uploads/2025/09/animation.svg" alt="star">
            Innovative Event Designs
        </span>
        <span class="marquee-item">
            <img src="https://hod.gurenosay.org/wp-content/uploads/2025/09/animation.svg" alt="star">
            Planning Servic
        </span>
        <span class="marquee-item">
            <img src="https://hod.gurenosay.org/wp-content/uploads/2025/09/animation.svg" alt="star">
            Innovative Event Designs
        </span>
        <span class="marquee-item">
            <img src="https://hod.gurenosay.org/wp-content/uploads/2025/09/animation.svg" alt="star">
            Planning Servic
        </span>
        <span class="marquee-item">
            <img src="https://hod.gurenosay.org/wp-content/uploads/2025/09/animation.svg" alt="star">
            Innovative Event Designs
        </span>
        <span class="marquee-item">
            <img src="https://hod.gurenosay.org/wp-content/uploads/2025/09/animation.svg" alt="star">
            Planning Servic
        </span>
        <span class="marquee-item">
            <img src="https://hod.gurenosay.org/wp-content/uploads/2025/09/animation.svg" alt="star">
            Innovative Event Designs
        </span>
        <span class="marquee-item">
            <img src="https://hod.gurenosay.org/wp-content/uploads/2025/09/animation.svg" alt="star">
            Planning Servic
        </span>
        
        <!-- Duplicated Content for Seamless Loop -->
        <span class="marquee-item">
            <img src="https://hod.gurenosay.org/wp-content/uploads/2025/09/animation.svg" alt="star">
            Innovative Event Designs
        </span>
        <span class="marquee-item">
            <img src="https://hod.gurenosay.org/wp-content/uploads/2025/09/animation.svg" alt="star">
            Planning Servic
        </span>
        <span class="marquee-item">
            <img src="https://hod.gurenosay.org/wp-content/uploads/2025/09/animation.svg" alt="star">
            Innovative Event Designs
        </span>
        <span class="marquee-item">
            <img src="https://hod.gurenosay.org/wp-content/uploads/2025/09/animation.svg" alt="star">
            Planning Servic
        </span>
        <span class="marquee-item">
            <img src="https://hod.gurenosay.org/wp-content/uploads/2025/09/animation.svg" alt="star">
            Innovative Event Designs
        </span>
        <span class="marquee-item">
            <img src="https://hod.gurenosay.org/wp-content/uploads/2025/09/animation.svg" alt="star">
            Planning Servic
        </span>
        <span class="marquee-item">
            <img src="https://hod.gurenosay.org/wp-content/uploads/2025/09/animation.svg" alt="star">
            Innovative Event Designs
        </span>
        <span class="marquee-item">
            <img src="https://hod.gurenosay.org/wp-content/uploads/2025/09/animation.svg" alt="star">
            Planning Servic
        </span>
    </div>
</div>

<style>
.infinite-marquee {
    width: 100%;
    overflow: hidden;
    display: flex;
    white-space: nowrap;
    box-sizing: border-box;
    background: transparent;
    align-items: center;
    height: 50px; /* Adjust height as needed */
    position: relative;
}

.marquee-content {
    display: inline-flex;
    animation: marquee 30s linear infinite;
    align-items: center;
    /* Prevent the animation from being choppy on some browsers */
    will-change: transform;
}

.marquee-item {
    display: inline-flex;
    align-items: center;
    color: #333;
    font-weight: 400;
    font-size: 20px;
    font-family: 'Futura PT Medium';
    padding-right: 50px;
    white-space: nowrap;
    flex-shrink: 0;
}

.marquee-item img {
    vertical-align: middle;
    margin-right: 8px; /* Space between icon and text */
    display: inline-block;
}

@keyframes marquee {
    0% {
        transform: translateX(0);
    }
    100% {
        transform: translateX(-50%);
    }
}

/* Optional: Add a fade effect on the edges for better visual */
.infinite-marquee::before,
.infinite-marquee::after {
    content: '';
    position: absolute;
    top: 0;
    bottom: 0;
    width: 50px;
    z-index: 2;
    pointer-events: none;
}

.infinite-marquee::before {
    left: 0;
    background: linear-gradient(to right, rgba(255,255,255,1), rgba(255,255,255,0));
}

.infinite-marquee::after {
    right: 0;
    background: linear-gradient(to left, rgba(255,255,255,1), rgba(255,255,255,0));
}
</style>