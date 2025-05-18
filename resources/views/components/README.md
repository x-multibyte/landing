# Landing Page 组件

这个目录包含了一系列可复用的Blade组件，用于构建Landing Page。通过使用这些组件，您可以快速构建不同风格的Landing Page，同时保持代码的一致性和可维护性。

## 可用组件

### 1. 应用布局 (app.blade.php)

这是主要的布局组件，包含了页面的基本结构，如头部、主体内容和页脚。

```php
<x-app>
    <!-- 页面内容 -->
</x-app>
```

#### 可用插槽

- `title`: 页面标题
- `styles`: 自定义样式
- `header`: 页面头部
- `footer`: 页面页脚
- `scripts`: 自定义脚本
- `slot`: 主要内容

### 2. 头部组件 (header.blade.php)

用于页面顶部的导航栏。

```php
<x-header>
    <!-- 自定义内容 -->
</x-header>
```

#### 可用插槽

- `logoUrl`: Logo链接地址
- `logoText`: Logo文本
- `logo`: 自定义Logo
- `navigation`: 导航链接
- `actions`: 操作按钮（如登录、注册等）

### 3. 页脚组件 (footer.blade.php)

用于页面底部的页脚信息。

```php
<x-footer>
    <!-- 自定义内容 -->
</x-footer>
```

#### 可用插槽

- `navigation`: 页脚导航链接
- `copyright`: 版权信息
- `actions`: 页脚操作按钮

### 4. Hero组件 (hero.blade.php)

Landing Page的主要内容区域，通常包含标题、副标题和行动按钮。

```php
<x-hero>
    <!-- 自定义内容 -->
</x-hero>
```

#### 可用插槽

- `title`: 主标题
- `subtitle`: 副标题
- `actions`: 行动按钮
- `content`: 额外内容

## 使用示例

查看 `example.blade.php` 文件，了解如何组合使用这些组件来构建完整的Landing Page。

## 自定义

所有组件都设计为可高度自定义。您可以通过以下方式自定义组件：

1. 使用插槽提供自定义内容
2. 继承并扩展现有组件
3. 使用CSS类自定义样式

## 在不同Landing Page中使用

您可以在 `landing1`、`landing2` 和 `landing3` 目录中使用这些组件，以保持代码的一致性和可维护性。例如：

```php
{{-- landing1/index.blade.php --}}
<x-app>
    <x-slot:header>
        <x-header>
            <!-- 自定义导航 -->
        </x-header>
    </x-slot:header>
    
    <x-hero>
        <!-- 自定义hero内容 -->
    </x-hero>
    
    <!-- 其他内容 -->
</x-app>
```

通过这种方式，您可以在不同的Landing Page中复用相同的组件，同时根据需要进行自定义。