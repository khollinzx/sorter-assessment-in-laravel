<?php

namespace App\Utils;

class Utils
{
    /** sorting the record bby the specified context.
     * @param array $payload
     * @param string $context
     * @return array
     */
    public static function sortProductsByContext(array $payload, string $context = "Price"): array
    {
        return match ($context) {
            "Views" => self::sortProductsByView($payload),
            default => self::sortProductsByPrice($payload),
        };
    }

    /** sorting by price
     * @param array $payload
     * @return array
     */
    public static function sortProductsByPrice(array $payload): array
    {
        usort($payload, function ($first, $last) {
            if ($first['price'] == $last['price']) {
                return 0;
            }
            return ($first['price'] > $last['price']) ? -1 : 1;
        });
        return $payload;
    }

    /** sorting by views
     * @param array $payload
     * @return array
     */
    public static function sortProductsByView(array $payload): array
    {
        usort($payload, function ($first, $last) {
            if (($first['sales_count']/$first['views_count']) === ($last['sales_count']/$last['views_count'])) {
                return 0;
            }
            return (($first['sales_count']/$first['views_count']) > ($last['sales_count']/$last['views_count'])) ? -1 : 1;
        });
        return $payload;
    }

}
