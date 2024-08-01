@props(['name', 'initials', 'motiv', 'duration'])
<div x-data="{
    hoverCardHovered: false,
    hoverCardDelay: 600,
    hoverCardLeaveDelay: 500,
    hoverCardTimout: null,
    hoverCardLeaveTimeout: null,
    hoverCardEnter() {
        clearTimeout(this.hoverCardLeaveTimeout);
        if (this.hoverCardHovered) return;
        clearTimeout(this.hoverCardTimout);
        this.hoverCardTimout = setTimeout(() => {
            this.hoverCardHovered = true;
        }, this.hoverCardDelay);
    },
    hoverCardLeave() {
        clearTimeout(this.hoverCardTimout);
        if (!this.hoverCardHovered) return;
        clearTimeout(this.hoverCardLeaveTimeout);
        this.hoverCardLeaveTimeout = setTimeout(() => {
            this.hoverCardHovered = false;
        }, this.hoverCardLeaveDelay);
    }
}" class="relative" @mouseover="hoverCardEnter()" @mouseleave="hoverCardLeave()">
    <a href="#_" class="hover:underline">
        <div
            class="relative inline-flex items-center justify-center w-14 h-14 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
            <span class="font-medium text-gray-600 dark:text-gray-300">{{ $initials }}</span>
        </div>
    </a>
    <div x-show="hoverCardHovered"
        class="absolute top-0 w-[365px] max-w-lg mt-5 z-30 -translate-x-1/2 translate-y-3 left-1/2" x-cloak>
        <div x-show="hoverCardHovered"
            class="w-[full] h-auto bg-white space-x-3 p-5 flex items-start rounded-md shadow-sm border border-neutral-200/70"
            x-transition>
            <div
                class="relative inline-flex items-center justify-center w-14 h-14 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                <span class="font-medium text-gray-600 dark:text-gray-300">{{ $initials }}</span>
            </div>
            <div class="relative">
                <p class="mb-1 font-bold">@ {{ $name }}</p>
                <p class="mb-1 text-sm text-gray-600">{{ $motiv }}</p>
                <p class="flex items-center space-x-1 text-xs text-gray-400">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                    </svg>
                    <span>for {{ $duration }}</span>
                </p>
            </div>
        </div>
    </div>
</div>
