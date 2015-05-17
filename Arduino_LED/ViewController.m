//
//  ViewController.m
//  Arduino_Web_LED
//
//  Created by leigh on 17/05/2015.
//  Copyright (c) 2015 leigh. All rights reserved.
//

#import "ViewController.h"

@implementation ViewController

- (void)viewDidLoad {
    [super viewDidLoad];
    // Do any additional setup after loading the view, typically from a nib.
}

- (void)didReceiveMemoryWarning {
    [super didReceiveMemoryWarning];
    // Dispose of any resources that can be recreated.
}

- (IBAction)setButtonPressed:(id)sender {
    int red     = _RedSlider.value * 255;
    int green   = _GreenSlider.value * 255;
    int blue    = _BlueSlider.value * 255;
    
    self.view.backgroundColor = [UIColor colorWithRed:red/255.00f green:green/255.00f blue:blue/255.00f alpha:1.0f];

    NSString *urlString = [NSString stringWithFormat:@"http://%@/arduino/serial_mood_lamp.php?r=%d&g=%d&b=%d", _IPAddress.text, red, green, blue];
    NSURL *url = [NSURL URLWithString:urlString];
    NSURLRequest *req = [NSURLRequest requestWithURL: url];
    [_WebView loadRequest: req];
}

@end
