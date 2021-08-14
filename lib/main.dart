import 'package:flutter/material.dart';
import 'screens/homeScreen.dart';
import 'lecture/ignorePointer.dart';
import 'screens/scrollableScreen.dart';
import 'screens/listWheelScrollScreen.dart';
import 'lecture/draggableContainer.dart';
import 'lecture/dragTarget.dart';
import 'screens/draggableScroll.dart';

void main() {
  runApp(MyApp());
}

class MyApp extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: 'Flutter Project',
      // home: IgnorePointerApp(),
      home: DragApp(),
      // home: DraggableContainer(),
    );
  }
}
