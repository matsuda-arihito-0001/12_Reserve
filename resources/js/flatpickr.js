import flatpickr from "flatpickr";
import { Japanese } from "flatpickr/dist/l10n/ja.js";

// flatpickrの指定方法 https://flatpickr.js.org/examples/

flatpickr("#event_date", {
    locale: Japanese,
    minDate: "today", // 今日以前選択不可
    maxDate: new Date().fp_incr(14), // 選択可能最大日数
});

const setting = {
    locale: Japanese,
    enableTime: true,
    noCalendar: true, // 日時のみの選択
    dateFormat: "H:i",
    time_24hr: true, // 24時間表記
    minTime: "10:00",
    maxTime: "18:00",
};
flatpickr("#start_time", setting);
flatpickr("#end_time", setting);
