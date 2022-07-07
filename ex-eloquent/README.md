# Eloquent Examples

## withCount

```php
$books = Book::with("orders")->get();
$books = Book::withCount("orders")->with("orders")->get();
$books = Book::withCount("orders")->with("orders")->get(["title"]);
```

## withSum

```php
$books = Book::withSum("orders", "book_order.amount")->get();
$books = Book::withSum("orders", "total_amount")->get();
```