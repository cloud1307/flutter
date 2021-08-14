import 'package:flutter/material.dart';

class ListWheelScrollView1 extends StatefulWidget {
  @override
  _ListWheelScrollView1State createState() => _ListWheelScrollView1State();
}

class _ListWheelScrollView1State extends State<ListWheelScrollView1> {
  @override
  Widget builder({Color color, int item}) {
    return Container(
      height: 100,
      decoration: BoxDecoration(
        color: color,
        borderRadius: BorderRadius.circular(15),
      ),
      child: Center(
        child: Text(
          'Item ${item}',
          textAlign: TextAlign.center,
          style: TextStyle(color: Colors.white, fontSize: 50.0),
        ),
      ),
    );
  }

  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text('Scrolling List'),
      ),
      body: Padding(
        padding: const EdgeInsets.all(20.0),
        child: ListWheelScrollView(
          itemExtent: 250,
          diameterRatio: 2,
          //useMagnifier: true,
          //magnification: 1.3,
          // offAxisFraction: -1.5,
          children: [
            builder(color: Colors.amber, item: 1),
            builder(color: Colors.red, item: 2),
            builder(color: Colors.blue, item: 3),
            builder(color: Colors.green, item: 4),
            builder(color: Colors.purple, item: 5),
            builder(color: Colors.orange, item: 6),
            builder(color: Colors.teal, item: 7),
          ],
        ),
      ),
    );
  }
}
