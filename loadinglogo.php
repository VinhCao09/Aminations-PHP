<style>
    /* Định dạng phần tử chứa hình ảnh */
    .loading {
        display: none; /* Ẩn phần tử loading mặc định */
    }

    @media only screen and (min-width: 768px) {
        /* Duyệt trên điện thoại có độ rộng màn hình lớn hơn hoặc bằng 768px */
        /* Định dạng cho phần tử loading */
        .loading {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: linear-gradient(to right, #fc5c7d, #6a82fb);
            z-index: 9999;
            opacity: 1;
            transition: opacity 0.5s ease-out;
        }
    }

    /* Định dạng hình ảnh GIF */
    .loading img {
        width: 250px;
        height: 250px;
    }

    /* Ẩn hình ảnh khi trang đã tải xong */
    body.loaded .loading {
        opacity: 0;
        pointer-events: none;
    }

    /* Vô hiệu hóa cuộn chuột */
    body.no-scroll {
        overflow: hidden;
    }

    @media (prefers-color-scheme: dark) {
        body {
            background: white;
        }
    }

</style>
<script>
    window.addEventListener('load', function () {
        // Delay 1 giây
        setTimeout(function () {
            // Thêm lớp 'loaded' vào thẻ body
            document.body.classList.add('loaded');
            // Xóa lớp 'no-scroll' khỏi thẻ body
            document.body.classList.remove('no-scroll');
        }, 1000); // 1000 milliseconds = 1 giây

        // Thêm lớp 'no-scroll' vào thẻ body để vô hiệu hóa cuộn chuột
        document.body.classList.add('no-scroll');
    });
</script>

<div class="loading">
    <video autoplay muted loop width="60%" height="60%">
        <source src="/images/output-onlinegiftools.webm" type="video/webm">
        <!-- Thêm các định dạng video khác tại đây nếu muốn -->
    </video>
</div>
