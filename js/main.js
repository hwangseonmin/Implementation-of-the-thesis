window.console = window.console || function(t) {};

document.addEventListener("DOMContentLoaded", function () {
    const loadingButton = document.getElementById("loading-button");
    const loadingSpinner = document.getElementById("loading-spinner");

    // 버튼 클릭 이벤트 핸들러
    loadingButton.addEventListener("click", function () {
        // 버튼을 비활성화하고 로딩 스피너를 표시
        loadingButton.disabled = true;
        loadingSpinner.classList.remove("hidden");

        // 비동기 작업 시뮬레이션 (예: setTimeout을 사용하여 3초 후에 복구)
        setTimeout(function () {
            // 로딩 스피너를 숨기고 버튼을 활성화
            loadingButton.disabled = false;
            loadingSpinner.classList.add("hidden");
        }, 3000); // 3초
    });
});