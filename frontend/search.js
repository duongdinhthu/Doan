document.addEventListener("DOMContentLoaded", function() {
    const searchInput = document.getElementById('search');
    const searchResultsContainer = document.getElementById('searchResults');

    // Event listener cho input tìm kiếm
    searchInput.addEventListener('input', function() {
        const searchQuery = searchInput.value.toLowerCase();
        if (searchQuery.length === 0) {
            // Nếu không có truy vấn tìm kiếm, xóa tất cả kết quả hiển thị
            searchResultsContainer.innerHTML = '';
            return;
        }
        // Gọi hàm tìm kiếm và hiển thị kết quả
        const searchResults = performSearch(searchQuery);
        displaySearchResults(searchResults);
    });

    // Hàm thực hiện tìm kiếm
    function performSearch(query) {
        const dummySearchResults = [
            { title: "Kid's games", url: "Trochoitreem.html" },
            { title: "Adult games", url: "Trochoinguoilon.html" },
            { title: "Family game", url: "Trochoigiadinh.html" },
            { title: "Organizational services", url: "Dichvutochuc.html" },
            { title: "Service Package", url: "Dichvutrongoi.html" },
            { title: "Tour service", url: "Dichvutour.html" },
            { title: "Food", url: "Thucpham.html" },
            { title: "Personal items", url: "Docanhan.html" },
            { title: "Essential items", url: "Dothietyeu.html" }

        ];
        // Lọc và trả về các kết quả phù hợp với truy vấn tìm kiếm
        return dummySearchResults.filter(result =>
            result.title.toLowerCase().includes(query)
        );
    }

    // Hàm hiển thị kết quả tìm kiếm
    function displaySearchResults(results) {
        // Xóa bất kỳ kết quả hiện có nào trước khi hiển thị kết quả mới
        searchResultsContainer.innerHTML = '';
        // Lặp qua mỗi kết quả và hiển thị nó trong phần tử searchResultsContainer
        results.forEach(result => {
            const resultItem = document.createElement('div');
            resultItem.innerHTML = `<a href="${result.url}">${result.title}</a>`;
            searchResultsContainer.appendChild(resultItem);
        });
    }
});