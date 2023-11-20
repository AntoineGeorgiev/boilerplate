<div>
    <!-- start::Black overlay -->
    <div
        :class="menuOpen ? 'block' : 'hidden'"
        @click="menuOpen = false"
        class="fixed inset-0 z-20 transition-opacity bg-black opacity-50 lg:hidden">
    </div>
    <!-- end::Black overlay -->

</div>
