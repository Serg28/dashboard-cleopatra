<div class="space-y-6">
    <!-- Section -->
    <div>
        <h4 class="text-[10px] font-bold text-muted-foreground uppercase tracking-widest px-3 mb-4">ДАШБОРДИ</h4>
        <ul class="space-y-1">
            <x-dashboard-cleopatra-sidebar-item
                label="Аналітика"
                icon="ri-dashboard-line"
                route="dashboard.index"
                active="{{ request()->routeIs('dashboard.index') }}"
            />
            <x-dashboard-cleopatra-sidebar-item
                label="E-commerce"
                icon="ri-shopping-bag-3-line"
                route="dashboard.ecommerce"
                active="{{ request()->routeIs('dashboard.ecommerce') }}"
            />
            <x-dashboard-cleopatra-sidebar-item
                label="Криптовалюта"
                icon="ri-coin-line"
                route="dashboard.crypto"
                active="{{ request()->routeIs('dashboard.crypto') }}"
            />
        </ul>
    </div>

    <!-- Section -->
    <div>
        <h4 class="text-[10px] font-bold text-muted-foreground uppercase tracking-widest px-3 mb-4">APPS</h4>
        <ul class="space-y-1">
            <x-dashboard-cleopatra-sidebar-item label="Пошта" icon="ri-mail-line" route="#" />
            <x-dashboard-cleopatra-sidebar-item label="Календар" icon="ri-calendar-line" route="#" />
            <x-dashboard-cleopatra-sidebar-item label="Чат" icon="ri-chat-3-line" route="#" />
        </ul>
    </div>

    <!-- Section -->
    <div>
        <h4 class="text-[10px] font-bold text-muted-foreground uppercase tracking-widest px-3 mb-4">UI ЕЛЕМЕНТИ</h4>
        <ul class="space-y-1">
            <x-dashboard-cleopatra-sidebar-item
                label="Компоненти"
                icon="ri-stack-line"
                route="dashboard.ui-elements"
                active="{{ request()->routeIs('dashboard.ui-elements') }}"
            />
            <x-dashboard-cleopatra-sidebar-item
                label="Таблиці"
                icon="ri-table-line"
                route="dashboard.tables"
                active="{{ request()->routeIs('dashboard.tables') }}"
            />
            <x-dashboard-cleopatra-sidebar-item
                label="Форми"
                icon="ri-edit-box-line"
                route="dashboard.forms"
                active="{{ request()->routeIs('dashboard.forms') }}"
            />
        </ul>
    </div>
</div>
