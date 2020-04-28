<?php
/**
 * @OA\Schema(
 *   schema="bookData",
 *   type="object",
 *   description="book data",
 *   @OA\Property(
 *     property="title",
 *     type="string",
 *     example="1Omnis vitae animi ut quod dolorum."
 *   ),
 *   @OA\Property(
 *     property="price",
 *     type="string",
 *     example="84"
 *   ),
 *   @OA\Property(
 *     property="author",
 *     type="string",
 *     example="Camila Heaney"
 *   ),
 *   @OA\Property(
 *     property="editor",
 *     type="string",
 *     example="Jacobi LLC"
 *   )
 * )
 *
 * @OA\Schema(
 *   schema="book",
 *   type="object",
 *   description="book entity",
 *   allOf={
 *     @OA\Schema(
 *       @OA\Property(
 *         property="id",
 *         type="integer",
 *         example="1"
 *       ), *
 *     ),
 *     @OA\Schema(ref="#/components/schemas/bookData"),
 *     @OA\Schema(
 *       @OA\Property(
 *         property="created_at",
 *         type="string",
 *         example="2020-04-28T13:59:05.000000Z"
 *       ),
 *       @OA\Property(
 *         property="updated_at",
 *         type="string",
 *         example="2020-04-28T13:59:05.000000Z"
 *       )
 *     )
 *   }
 * )
 *
 * @OA\Schema(
 *   schema="books",
 *   type="object",
 *   description="book list",
 *   @OA\Property(
 *     property="current_page",
 *     type="integer",
 *     description="",
 *     example=2,
 *   ),
 *   @OA\Property(
 *     property="data",
 *     type="array",
 *     description="",
 *     @OA\Items(ref="#/components/schemas/book")
 *   ),
 *   @OA\Property(
 *     property="first_page_url",
 *     type="string",
 *     description="",
 *     example="http://localhost:8080/api/books?page=1"
 *   ),
 *   @OA\Property(
 *     property="from",
 *     type="integer",
 *     description="",
 *     example=1,
 *   ),
 *   @OA\Property(
 *     property="last_page",
 *     type="integer",
 *     description="",
 *     example=3,
 *   ),
 *   @OA\Property(
 *     property="last_page_url",
 *     type="string",
 *     description="",
 *     example="http://localhost:8080/api/books?page=3"
 *   ),
 *   @OA\Property(
 *     property="next_page_url",
 *     type="string",
 *     description="",
 *     example="http://localhost:8080/api/books?page=3",
 *   ),
 *   @OA\Property(
 *     property="path",
 *     type="string",
 *     description="",
 *     example="http://localhost:8080/api/books",
 *   ),
 *   @OA\Property(
 *     property="per_page",
 *     type="integer",
 *     description="",
 *     example=10,
 *   ),
 *   @OA\Property(
 *     property="prev_page_url",
 *     type="string",
 *     description="",
 *     example="http://localhost:8080/api/books?page=1",
 *   ),
 *   @OA\Property(
 *     property="to",
 *     type="integer",
 *     description="",
 *     example=20,
 *   ),
 *   @OA\Property(
 *     property="total",
 *     type="integer",
 *     description="",
 *     example=30,
 *   )
 * )
 *
 * @OA\Response(
 *   response=401,
 *   description="Error: Unauthorized",
 *   @OA\MediaType(
 *     mediaType="application/json",
 *     @OA\Schema(
 *       type="object",
 *       @OA\Property(
 *         property="status",
 *         type="string",
 *         example="error"
 *       ),
 *       @OA\Property(
 *         property="error",
 *         type="string",
 *         example="Unauthenticated"
 *       )
 *     )
 *   )
 * )
 */
