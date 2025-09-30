<div class="infinite-marquee">
    <div class="marquee-content" aria-hidden="true">
        <span class="marquee-item">
            <img src="https://hod.gurenosay.org/wp-content/uploads/2025/09/animation.svg" alt="star">
            Lights in your sight
        </span>
        <span class="marquee-item">
            <img src="https://hod.gurenosay.org/wp-content/uploads/2025/09/animation.svg" alt="star">
            Sparkles in your life
        </span>
        <span class="marquee-item">
            <img src="https://hod.gurenosay.org/wp-content/uploads/2025/09/animation.svg" alt="star">
            Lights in your sight
        </span>
        <span class="marquee-item">
            <img src="https://hod.gurenosay.org/wp-content/uploads/2025/09/animation.svg" alt="star">
            Sparkles in your life
        </span>
        <span class="marquee-item">
            <img src="https://hod.gurenosay.org/wp-content/uploads/2025/09/animation.svg" alt="star">
            Lights in your sight
        </span>
        <span class="marquee-item">
            <img src="https://hod.gurenosay.org/wp-content/uploads/2025/09/animation.svg" alt="star">
            Sparkles in your life
        </span>
        <span class="marquee-item">
            <img src="https://hod.gurenosay.org/wp-content/uploads/2025/09/animation.svg" alt="star">
            Lights in your sight
        </span>
        <span class="marquee-item">
            <img src="https://hod.gurenosay.org/wp-content/uploads/2025/09/animation.svg" alt="star">
            Sparkles in your life
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
}

.marquee-content {
    display: inline-flex;
    animation: marquee 30s linear infinite;
    align-items: center;
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
</style>