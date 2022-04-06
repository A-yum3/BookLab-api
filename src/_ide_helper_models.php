<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Author
 *
 * @property int $id
 * @property string $name 名称
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\AuthorBook[] $authorBooks
 * @property-read int|null $author_books_count
 * @method static \Illuminate\Database\Eloquent\Builder|Author newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Author newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Author query()
 * @method static \Illuminate\Database\Eloquent\Builder|Author whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Author whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Author whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Author whereUpdatedAt($value)
 */
	class Author extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\AuthorBook
 *
 * @property int $id
 * @property int $book_id
 * @property int $author_id
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property-read \App\Models\Author $author
 * @property-read \App\Models\Book $book
 * @method static \Illuminate\Database\Eloquent\Builder|AuthorBook newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AuthorBook newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AuthorBook query()
 * @method static \Illuminate\Database\Eloquent\Builder|AuthorBook whereAuthorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AuthorBook whereBookId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AuthorBook whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AuthorBook whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AuthorBook whereUpdatedAt($value)
 */
	class AuthorBook extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Book
 *
 * @property int $id
 * @property int $book_category_id
 * @property string $title タイトル
 * @property string|null $description 詳細
 * @property \Carbon\CarbonImmutable $publish_at 出版日
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property-read \App\Models\BookCategory $BookCategory
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\AuthorBook[] $authorBooks
 * @property-read int|null $author_books_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\BookLoanHistory[] $bookLoanHistories
 * @property-read int|null $book_loan_histories_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\BookReservation[] $bookReservations
 * @property-read int|null $book_reservations_count
 * @method static \Illuminate\Database\Eloquent\Builder|Book newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Book newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Book query()
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereBookCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book wherePublishAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereUpdatedAt($value)
 */
	class Book extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\BookCategory
 *
 * @property int $id
 * @property string $name カテゴリー名
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Book[] $books
 * @property-read int|null $books_count
 * @method static \Illuminate\Database\Eloquent\Builder|BookCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BookCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BookCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|BookCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookCategory whereUpdatedAt($value)
 */
	class BookCategory extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\BookLoanHistory
 *
 * @property int $id
 * @property int $book_id
 * @property int $user_id
 * @property string $checkout_at
 * @property string|null $return_at
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property-read \App\Models\Book $book
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|BookLoanHistory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BookLoanHistory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BookLoanHistory query()
 * @method static \Illuminate\Database\Eloquent\Builder|BookLoanHistory whereBookId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookLoanHistory whereCheckoutAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookLoanHistory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookLoanHistory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookLoanHistory whereReturnAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookLoanHistory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookLoanHistory whereUserId($value)
 */
	class BookLoanHistory extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\BookReservation
 *
 * @property int $id
 * @property int $user_id
 * @property int $book_id
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property-read \App\Models\Book $book
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|BookReservation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BookReservation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BookReservation query()
 * @method static \Illuminate\Database\Eloquent\Builder|BookReservation whereBookId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookReservation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookReservation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookReservation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookReservation whereUserId($value)
 */
	class BookReservation extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $avatar
 * @property string|null $provider
 * @property string|null $provider_id
 * @property string|null $access_token
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\BookLoanHistory[] $bookLoanHistories
 * @property-read int|null $book_loan_histories_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\BookReservation[] $bookReservations
 * @property-read int|null $book_reservations_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Query\Builder|User onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAccessToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereProvider($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereProviderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|User withTrashed()
 * @method static \Illuminate\Database\Query\Builder|User withoutTrashed()
 */
	class User extends \Eloquent {}
}

