<div class="infinite-marquee">
    <div class="marquee-content">
        <label class="custom-moveing" style="color:#333; font-weight: 400; font-size:20px;">
            <img src="https://hod.gurenosay.org/wp-content/uploads/2025/09/animation.svg">
           Lights in your sight
           <img src="https://hod.gurenosay.org/wp-content/uploads/2025/09/animation.svg">
           Sparkles in your life
           <img src="https://hod.gurenosay.org/wp-content/uploads/2025/09/animation.svg">
        </label>
    </div>
    <div class="marquee-content" aria-hidden="true">
        <label style="color:#333; font-weight: 400; font-size:20px;">
            <img src="https://hod.gurenosay.org/wp-content/uploads/2025/09/animation.svg">
           Lights in your sight
           <img src="https://hod.gurenosay.org/wp-content/uploads/2025/09/animation.svg">
           Sparkles in your life
           <img src="https://hod.gurenosay.org/wp-content/uploads/2025/09/animation.svg">


        </label>
    </div>
</div>

<style>
.custom-moving {
    font-family: "Poppin", sans-serif !important;
}
.infinite-marquee {
    width: 100%;
    overflow: hidden;
    display: flex;
    white-space: nowrap;
    box-sizing: border-box;
    background: transparent; /* Change as needed */
}

.marquee-content {
    display: inline-block;
    animation: marquee 30s linear infinite;
    padding-right: 10px; /* Adjust spacing between copies */
}

.marquee-content label {
    font-family: 'Futura PT Medium';
    display: inline-block;
    padding-right: 50px; /* Adjust spacing between items */
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