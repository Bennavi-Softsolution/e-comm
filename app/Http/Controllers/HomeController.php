<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $shoes = [
            (object)[
                'image' => 'p1.jpg',
                'title' => 'StrideMax Pro Running Shoes',
                'description' => 'Lightweight, breathable, and built for performance. Your go-to choice for running with style and comfort.',
                'price' => 1999,
                'rating' => 3,
            ],
            (object)[
                'image' => 'p2.jpg',
                'title' => 'GripMax Trail Hiking Boots',
                'description' => 'Combine waterproof durability with high-traction soles, ideal for conquering rugged terrain and exploring new heights comfortably.',
                'price' => 1799,
                'rating' => 3,
            ],
            (object)[
                'image' => 'p3.jpg',
                'title' => 'UrbanFlex Casual Sneakers',
                'description' => 'UrbanFlex Casual Sneakers offer sleek style and all-day comfort, perfect for navigating city streets with ease.',
                'price' => 1499,
                'rating' => 3,
            ],
            (object)[
                'image' => 'p4.jpg',
                'title' => 'PeakPro Trail Running Shoes',
                'description' => 'PeakPro Trail Running Shoes: Lightweight, rugged, and designed for peak performance on any terrain.',
                'price' => 5999,
                'rating' => 3,
            ],
            (object)[
                'image' => 'p5.jpg',
                'title' => 'SwiftGlide Slip-On Sneakers',
                'description' => 'SwiftGlide Slip-On Sneakers: Effortless style meets comfort with these versatile slip-ons, perfect for everyday wear.',
                'price' => 999,
                'rating' => 3,
            ],
            (object)[
                'image' => 'p6.jpg',
                'title' => 'ActiveStride Fitness Shoes',
                'description' => 'ActiveStride Fitness Shoes: Engineered for performance, these shoes provide comfort and support for your active lifestyle.',
                'price' => 4999,
                'rating' => 3,
            ],
            (object)[
                'image' => 'p7.jpg',
                'title' => 'SummitVenture Trekking Sandals',
                'description' => 'SummitVenture Trekking Sandals: Designed for adventure, these sandals offer comfort and durability for exploring both land and water.',
                'price' => 9999,
                'rating' => 3,
            ],
            (object)[
                'image' => 'p8.jpg',
                'title' => 'VentureTrack Trail Running Shoes',
                'description' => 'Lightweight, durable, and engineered for superior grip on challenging trails, perfect for avid runners.',
                'price' => 7999,
                'rating' => 3,
            ],
            (object)[
                'image' => 'p9.jpg',
                'title' => 'SwiftGrip Cross Training Shoes',
                'description' => 'Versatile and supportive, these shoes are designed to enhance stability and performance during diverse workout routines.',
                'price' => 6999,
                'rating' => 3,
            ],
        ];

        $watches = [
            (object)[
                'image' => 'w9.jpg',
                'title' => 'StrideMax Pro Running Shoes',
                'description' => 'Lightweight, breathable, and built for performance. Your go-to choice for running with style and comfort.',
                'price' => 1999,
                'rating' => 3,
            ],
            (object)[
                'image' => 'w2.jpg',
                'title' => 'GripMax Trail Hiking Boots',
                'description' => 'Combine waterproof durability with high-traction soles, ideal for conquering rugged terrain and exploring new heights comfortably.',
                'price' => 1799,
                'rating' => 3,
            ],
            (object)[
                'image' => 'w3.jpg',
                'title' => 'UrbanFlex Casual Sneakers',
                'description' => 'UrbanFlex Casual Sneakers offer sleek style and all-day comfort, perfect for navigating city streets with ease.',
                'price' => 1499,
                'rating' => 3,
            ],
            (object)[
                'image' => 'w10.jpg',
                'title' => 'PeakPro Trail Running Shoes',
                'description' => 'PeakPro Trail Running Shoes: Lightweight, rugged, and designed for peak performance on any terrain.',
                'price' => 5999,
                'rating' => 3,
            ],
            (object)[
                'image' => 'w5.jpg',
                'title' => 'SwiftGlide Slip-On Sneakers',
                'description' => 'SwiftGlide Slip-On Sneakers: Effortless style meets comfort with these versatile slip-ons, perfect for everyday wear.',
                'price' => 999,
                'rating' => 3,
            ],
            (object)[
                'image' => 'w6.jpg',
                'title' => 'ActiveStride Fitness Shoes',
                'description' => 'ActiveStride Fitness Shoes: Engineered for performance, these shoes provide comfort and support for your active lifestyle.',
                'price' => 4999,
                'rating' => 3,
            ],
            (object)[
                'image' => 'w7.jpg',
                'title' => 'SummitVenture Trekking Sandals',
                'description' => 'SummitVenture Trekking Sandals: Designed for adventure, these sandals offer comfort and durability for exploring both land and water.',
                'price' => 9999,
                'rating' => 3,
            ],
            (object)[
                'image' => 'w8.jpg',
                'title' => 'VentureTrack Trail Running Shoes',
                'description' => 'Lightweight, durable, and engineered for superior grip on challenging trails, perfect for avid runners.',
                'price' => 7999,
                'rating' => 3,
            ],
            (object)[
                'image' => 'w1.jpg',
                'title' => 'SwiftGrip Cross Training Shoes',
                'description' => 'Versatile and supportive, these shoes are designed to enhance stability and performance during diverse workout routines.',
                'price' => 6999,
                'rating' => 3,
            ],
        ];

        $accessories = [
            (object)[
                'image' => 'a1.jpg',
                'title' => 'StrideMax Pro Running Shoes',
                'description' => 'Lightweight, breathable, and built for performance. Your go-to choice for running with style and comfort.',
                'price' => 1999,
                'rating' => 3,
            ],
            (object)[
                'image' => 'a2.jpg',
                'title' => 'GripMax Trail Hiking Boots',
                'description' => 'Combine waterproof durability with high-traction soles, ideal for conquering rugged terrain and exploring new heights comfortably.',
                'price' => 1799,
                'rating' => 3,
            ],
            (object)[
                'image' => 'a3.jpg',
                'title' => 'UrbanFlex Casual Sneakers',
                'description' => 'UrbanFlex Casual Sneakers offer sleek style and all-day comfort, perfect for navigating city streets with ease.',
                'price' => 1499,
                'rating' => 3,
            ],
            (object)[
                'image' => 'a4.jpg',
                'title' => 'PeakPro Trail Running Shoes',
                'description' => 'PeakPro Trail Running Shoes: Lightweight, rugged, and designed for peak performance on any terrain.',
                'price' => 5999,
                'rating' => 3,
            ],
            (object)[
                'image' => 'a5.jpg',
                'title' => 'SwiftGlide Slip-On Sneakers',
                'description' => 'SwiftGlide Slip-On Sneakers: Effortless style meets comfort with these versatile slip-ons, perfect for everyday wear.',
                'price' => 999,
                'rating' => 3,
            ],
            (object)[
                'image' => 'a6.jpg',
                'title' => 'ActiveStride Fitness Shoes',
                'description' => 'ActiveStride Fitness Shoes: Engineered for performance, these shoes provide comfort and support for your active lifestyle.',
                'price' => 4999,
                'rating' => 3,
            ],
            (object)[
                'image' => 'a7.jpg',
                'title' => 'SummitVenture Trekking Sandals',
                'description' => 'SummitVenture Trekking Sandals: Designed for adventure, these sandals offer comfort and durability for exploring both land and water.',
                'price' => 9999,
                'rating' => 3,
            ],
            (object)[
                'image' => 'a8.jpg',
                'title' => 'VentureTrack Trail Running Shoes',
                'description' => 'Lightweight, durable, and engineered for superior grip on challenging trails, perfect for avid runners.',
                'price' => 7999,
                'rating' => 3,
            ],
            (object)[
                'image' => 'a9.jpg',
                'title' => 'SwiftGrip Cross Training Shoes',
                'description' => 'Versatile and supportive, these shoes are designed to enhance stability and performance during diverse workout routines.',
                'price' => 6999,
                'rating' => 3,
            ],
        ];

        return view('pages.home', compact('shoes', 'watches', 'accessories'));
        
    }
}
